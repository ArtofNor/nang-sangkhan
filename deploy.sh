#!/bin/bash

# Configuration
REMOTE_USER="dh_ini9mv"
REMOTE_HOST="nangsangkhan.com"
REMOTE_PATH="/home/dh_ini9mv/nangsangkhan.com"
LOCAL_PATH="./"

# Colors for output
GREEN='\033[0;32m'
NC='\033[0m' # No Color

echo -e "${GREEN}Starting WordPress deployment to nangsangkhan.com...${NC}"

# Sync files using rsync (excludes .git, wp-config.php, and uploads)
rsync -avz --delete \
    --exclude '.git/' \
    --exclude 'wp-config.php' \
    --exclude 'wp-content/uploads/' \
    --exclude 'wp-content/cache/' \
    --exclude '.DS_Store' \
    --exclude 'deploy.sh' \
    --exclude '.cursor/' \
    --exclude '.gitignore' \
    "$LOCAL_PATH" "$REMOTE_USER@$REMOTE_HOST:$REMOTE_PATH"

# Set proper permissions for DreamHost
ssh "$REMOTE_USER@$REMOTE_HOST" "
    # Set directory permissions
    find $REMOTE_PATH -type d -exec chmod 755 {} \;
    
    # Set file permissions
    find $REMOTE_PATH -type f -exec chmod 644 {} \;
    
    # Make PHP files executable
    find $REMOTE_PATH -name '*.php' -exec chmod 755 {} \;
    
    # Set special permissions for .htaccess
    chmod 644 $REMOTE_PATH/.htaccess
    
    # Set ownership to the web server user
    chown -R $REMOTE_USER:$REMOTE_USER $REMOTE_PATH
"

echo -e "${GREEN}WordPress deployment complete!${NC}" 