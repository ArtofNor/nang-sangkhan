# Product Requirements Document (PRD)

## Project Overview

This project involves developing a static website highlighting Lao mythological figures—the seven Nang Sangkhan sisters, their father King Kabinlaphom, and nemesis Thammaban—in a comic book-inspired style. The site will feature character profiles, interactive calendar functionality for procession leader identification by year, and a dedicated stories section.

## Features

Character Profiles
Interactive Calendar Tool
Story Showcase (Comics and Short Stories)
Homepage Highlight (Dynamic Leader Display)

## Requirements for Each Feature

1. Character Profiles

Pages: Individual static HTML/PHP pages for each character (9 pages total).
Profile Details:
- Character Name (String: character_name)
- Day of Week (String: day_of_week, nullable for non-sister characters)
- Mount/Vehicle (String: mount)
- Weapons or Items (Array of Strings: weapons_items)
- Biography (String: biography)
- Associated Color (Hexadecimal color string: color_hex)
- Character Image URL (String: image_url)

2. Interactive Calendar Tool

Time Span: Must support years 50 years back and 50 years forward from the current year.
Functionality:
- Input field (<select> or <input type="number">) for year selection.
- Dynamically display the Nang Sangkhan sister associated with the selected year based on Lao New Year Day calculation (April 14).

Implementation:
- Calculate weekday of April 14 of the selected year.
- Weekday-to-sister mapping stored in JavaScript object:

const weekdayToSister = {
  0: 'Nang Thoungsa',
  1: 'Nang Kholaka',
  2: 'Nang Haksa',
  3: 'Nang Montha',
  4: 'Nang Kirinee',
  5: 'Nang Kimitha',
  6: 'Nang Mahothon'
};

function getLeadingSister(year) {
  const date = new Date(year, 3, 14); // April is month 3 (0-indexed)
  return weekdayToSister[date.getDay()];
}

3. Story Showcase

Content Types: Comic image series and prose stories
Stories Structure:
- Title (story_title)
- Format (comic or prose)
- Thumbnail Image URL (thumbnail_url)
- Content Array (content_urls for comics; content_text for prose)
Navigation: Stories index page with filtering by format type (JS toggles DOM visibility).

4. Homepage Highlight

- Dynamically display the current year's leading Nang Sangkhan sister.
- Fetch current date (client-side via JavaScript) to auto-calculate the current year's leader using the same function from Interactive Calendar Tool.

Data Model (Sample JSON Representation)

Character Profile Example:

{
  "character_name": "Nang Montha",
  "day_of_week": "Wednesday",
  "mount": "Donkey",
  "weapons_items": ["Sharp Iron", "Walking Cane"],
  "biography": "Detailed character biography goes here.",
  "color_hex": "#FF69B4",
  "image_url": "images/nang_montha.png"
}

Story Example:

{
  "story_title": "Battle of Wisdom",
  "format": "comic",
  "thumbnail_url": "stories/battle_of_wisdom/thumb.jpg",
  "content_urls": [
    "stories/battle_of_wisdom/page1.jpg",
    "stories/battle_of_wisdom/page2.jpg"
  ]
}

API Contract
No external API is required. All data will be static or generated client-side/server-side internally.

Dependencies
- PHP (server-side templating for page rendering)
- JavaScript (client-side for interactive components and dynamic year calculations)
- HTML/CSS (frontend design and responsiveness)

Variables and API Calls
- Year Selection Input: HTML <select> or <input> (id="yearSelection")
- Display Div: HTML <div> (id="leaderResult")
- JavaScript Functions:
getLeadingSister(year)

Technical Considerations
- Use semantic HTML5 tags to ensure accessibility.
- Implement responsive layouts via CSS Flexbox/Grid.
- Ensure sufficient contrast and readable fonts as per accessibility standards.