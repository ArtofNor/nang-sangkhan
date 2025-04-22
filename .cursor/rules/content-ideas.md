Lao Mythic Characters Website Layout Plan
Site Overview
This website will showcase the seven Nang Sangkhan sisters from Lao mythology, along with their father (King Kabinlaphom) and nemesis (Thammaban). The design will blend a comic book character feel with mythological/fantasy elements. Content is mostly static (character bios and story lore) with an interactive calendar feature highlighting which sister leads the Lao New Year procession each year. The site will be primarily in English, built using PHP, HTML/CSS, and JavaScript.
Site Structure and Pages
Homepage: A dynamic landing page featuring the current year’s leading sister, an interactive year-selection calendar tool, and quick links or previews to characters and stories.
Characters Section: Dedicated profile pages for each character (7 sisters + King Kabinlaphom + Thammaban). Could be grouped under a main “Characters” menu:
Nang Sangkhan Sisters: Seven pages (one per sister, e.g. Nang Thoungsa, Nang Kholaka, etc.).
King Kabinlaphom: Profile page for the father.
Thammaban: Profile page for the nemesis.
Stories Section: Showcasing narrative content. This might be split into:
Comic Stories: A gallery or list of comic-format stories (with thumbnails/covers).
Short Text Stories: A list of prose stories or myth retellings.
Each story will have its own page or lightbox for reading.
About: Background on the myth, the project, or creators. Could include the legend of Lao New Year and cultural context.
Contact: Contact information or a form for feedback. (Alternatively, “About” and “Contact” could be combined if brief.)
All pages will share a consistent header/navigation menu and footer for easy site-wide navigation. The structure should be intuitive, with logical grouping (e.g. character bios under one section, story content under another).
Homepage Layout
Header: The top of the homepage will have a clear site title or logo (perhaps a stylized Lao motif or comic-style title text) and a navigation menu (links to Characters, Stories, Calendar, About, Contact). Keep the header fixed for easy navigation. Hero Section: A bold feature section highlighting the current year’s presiding sister. For example:
A prominent illustration of the current Nang Sangkhan sister who leads this year’s Lao New Year procession (perhaps drawn in comic style).
A short blurb: e.g. “Happy Lao New Year! This year’s leader of the procession is Nang [Name], the goddess of [Day]!” – mentioning her day of week and a key attribute.
This can include a call-to-action button linking to that sister’s full profile page for more details.
Interactive Calendar Widget: Just below the hero, include the calendar tool for exploring any year:
A labeled input (dropdown or slider or date picker) where users can select a year (from 50 years past to 50 years future).
A dynamic display area that, upon year selection, shows which sister leads that year’s procession, including her name, day-of-week, and perhaps a small icon or avatar. For example, selecting 2030 might show “2030 – Led by Nang Montha (Wednesday Princess)”. This can dynamically update without page reload (via JavaScript).
Brief instructions or label (e.g. “Explore the procession leader by year:”).
Under the hood, this feature will use the known rule that the New Year’s leading sister is determined by the weekday of Lao New Year’s Day​
andrewandterry.net
. The script (JS or PHP) can calculate the day-of-week for Lao New Year in a given year and map it to the correct sister. (Traditionally, if New Year falls on a Monday, the Monday princess leads, etc., with a special rule that after a leap year the cycle skips one sister due to the calendar shift​
medium.com
.) The interface should clearly display the result (perhaps with the sister’s image for visual flair). Featured Sections: Lower on the homepage, include a few sections to engage visitors:
Meet the Sisters: A visual strip or grid showing all seven sisters with their names (possibly each as a small portrait or icon). These can link to the individual profile pages. A comic-style group image or collage could work here.
Latest Story or Highlight: Feature the newest comic or story from the Stories section. For example, a comic cover thumbnail or a teaser image with a caption. This invites users to read a story.
Optionally, a Mythology Blurb: A short introduction to the legend of King Kabinlaphom and his daughters, to set context. Just a few sentences with a “Learn more” link to the About page for the full legend.
Footer: A footer with copyright, site credits, and possibly small decorative graphics (like symbols of the days of the week or the sisters’ animal mounts). Include any relevant links (contact info, social media if any, etc.). Ensure the footer is visually consistent (maybe using a pattern or color from the header). Wireframe Summary: The homepage essentially flows from a top navigation, to a hero spotlight (current leader), an interactive calendar tool, then secondary content (character lineup and story highlights), ending in a footer. Each section should be visually distinct (e.g. hero with a bold background, calendar on a clean white or contrasting panel, etc.) for a comic-like segmented feel.
Character Profile Pages
Each character page will present information much like a comic book character bio, in a consistent template. Key layout elements for each Character Profile page:
Header & Title: The character’s name prominently at the top. Use a stylized font for character names to give a comic or mythical vibe (but still readable). You might include the Lao script name alongside the English, if desired, for authenticity (as shown in some sources​
medium.com
).
Character Illustration: A large image of the character (e.g. a comic-style illustration of the sister in her traditional attire, or King Kabinlaphom on his throne, etc.). This could be aligned to one side or centered. To get a comic layout feel, consider a full-width banner illustration at the top of the page, or a framed image with a caption.
Bio Text: A paragraph or two describing the character:
For sisters: mention she is the goddess of a certain weekday, her role in the New Year procession, personality or mythic attributes. Include her attributes (animal mount, weapons, favorite food, flower, etc.) either in the text or as a short list. For example: “Attributes: Rides a Garuda, carries a chakra (throwing disk) and conch shell​
andrewandterry.net
, flower is the peony.” Such details can be bolded or listed for quick scanning.
For King Kabinlaphom: describe his story (the wise deity who posed the riddle and whose head is kept aloft)​
andrewandterry.net
.
For Thammaban: explain his role as the riddle-solving youth and how he’s considered a nemesis or key figure in the myth.
Stats or Profile Info Box: Many comic sites include a sidebar or infobox with quick stats. You can emulate this with a styled box (perhaps aligned to the right on desktop, or as a horizontal band beneath the intro on mobile). This box could list: Day of Week (for sisters), Symbolic Items (weapons or items they carry), Mount/Vehicle, Element (food or element associated), etc. For instance, Nang Kholaka’s box might say “Day: Monday, Mount: Tiger, Weapon: Sword, Other Item: Cane”​
medium.com
.
Backstory & Personality: Following the basics, include another section with more narrative – a short backstory or myth excerpt about the character. This could be a couple of paragraphs. For a comic feel, consider breaking this into panels or callouts – e.g. a quote in a speech bubble graphic, or a stylized container that looks like a page from a comic describing a key event (like “Kabinlaphom challenges Thammaban with a riddle…”).
Related Content/Links: At the bottom, provide links such as:
“See the legend” (link to About story of the myth).
“Appearances in Stories” (if this character is featured in any story on the site, link to those comics or texts).
Navigation to other characters (like arrows or a simple list “Previous/Next character” or a return to Characters index).
Wireframe Summary: Each profile page should have a strong visual at top, followed by a mix of text and possibly smaller images or icons illustrating the character’s traits. Use headings or bold labels (like “Attributes,” “Background,” etc.) to break up the info. Keep paragraphs short and use bullet lists for lists of traits so it’s easy to scan (mimicking the style of comic wikis or trading cards). Visually, consider using thematic colors for each character’s page (e.g. Sunday’s page accented with red for ruby, Monday’s with tiger stripes or appropriate color, etc.) to give each a unique flavor while maintaining overall coherence.
Stories Section Layout
The Stories section will house both comic-style stories and prose. Organize it for easy browsing: Stories Landing Page: This could be a hub page with thumbnails and titles of each story:
Use a grid or list of story “cards.” Each card might show a cover image or a representative panel, the story title, and a short blurb or genre tag (comic or text).
Group or filter: possibly have tabs or filter buttons for Comics vs Short Stories so users can toggle. For example, two buttons at top: “Comic Stories” and “Text Stories,” which show/hide the respective items.
Each story entry indicates its format. For comics, maybe an icon of a comic page, for text, an icon of a scroll or book.
Comic Story Page: When a user selects a comic story:
The page could present the comic in a user-friendly reading format. Options:
Image Gallery/Slider: If the comic is a series of images (pages or strips), implement a slider or slideshow. Users can click “Next” and “Previous” to navigate pages, or view in an image carousel. This could be done with a JS library or a custom lightbox.
Vertical Scroll: If the comic is formatted as one long vertical strip (common for webcomics), simply display it in sequence down the page. Use high-quality images and let users scroll naturally.
Provide controls or indicators (page 1 of X). Possibly enable fullscreen mode for a more immersive experience.
Keep some branding or navigation visible (maybe a back button to Stories, and the site header could auto-hide when scrolling).
Optionally, allow comments or feedback at the bottom if the site will engage community (could be a future feature).
Text Story Page: For prose stories or myths:
A clean readable text layout – maybe a larger serif font for a storybook feel.
Include an illustration or banner at the top related to the story (e.g. a small painting or graphic of the sisters if it’s about them).
Use headings or drop caps to give it a polished look (some fantasy sites use decorative drop caps at the start of stories).
Keep line length and spacing comfortable (CSS can ensure the text isn’t too wide on large screens).
If stories are long, consider a sidebar with a table of contents or the ability to jump to chapters/sections.
Story Page Extras: On both types of story pages, you might include:
Credits (author, artist, etc. if applicable).
A “Last updated” date if stories might occasionally update.
Links to related stories or characters (e.g. “This story features Nang X, see her profile”).
A comment or discussion plugin if desired (though not required for a primarily static site).
Wireframe Summary: The stories landing page is essentially a gallery with filters. Each story page is designed for the content format (visual for comics, textual for prose), minimizing distractions. Ensure the navigation menu is still accessible so users can jump to other sections.
Interactive Calendar Feature Implementation
One of the centerpiece features is the year lookup tool that tells which sister leads the procession in a given year. Here are suggestions for building it:
Data & Logic: The rule is based on the day of week of Lao New Year’s day each year​
andrewandterry.net
. Typically, Lao New Year falls around April 13–15 each year. For simplicity, we can assume New Year’s Day as April 14 (which is common for Pi Mai) and find its weekday. The mapping is straightforward (Sunday → Nang Thoungsa, Monday → Nang Kholaka, etc.). Keep this mapping in an array or object in your script.
Leap Year Note: Because leap years shift the calendar, the leading sister might jump ahead by two days of the week after a leap year (skipping one sister in the cycle)​
medium.com
. If you use actual date calculations, this is inherently handled, but keep the traditional detail in mind. It means in code: year to year, it usually increments by one weekday, but a leap year causes an extra increment. Using real date functions will naturally account for this.
PHP Approach: You could generate the info server-side. For example, use PHP’s date functions to compute the weekday:
Use date('w', mktime(0,0,0, 4, 14, $year)) or PHP’s DateTime class for April 14 of the selected year. This gives a number 0-6 for Sunday-Saturday.
Map that to the corresponding sister name and info. You might store an associative array like $sisters = ["Sunday" => "Nang Thoungsa Thevi", ...] with maybe additional data (animal, image filename).
If the user selects a year from a form, your PHP script can return the result (either reloading the page or via an AJAX call).
JavaScript Approach: For a smoother UX, use JS to update on the fly:
Populate a dropdown or number input for years (e.g. using JS to generate options from currentYear-50 to currentYear+50, so it’s always up-to-date).
Attach an event listener so when the year changes, it triggers a function to calculate the leader. In JS, you can do new Date(year, 3, 14) (month 3 = April since JS months start at 0) to get April 14 of that year, then getDay() to get weekday (0 = Sunday, etc.). Map that to the sister.
Display the result in a dedicated <div> by updating its innerHTML to something like “Year X: Nang Y (DayName) leads the procession.”
Optionally, preload an image for each sister and use JS to swap the image shown alongside the text.
UX Considerations: Ensure the widget is easy to use:
Label the input clearly (e.g. “Select a Year”).
If using a number input, set reasonable min/max and maybe default it to the current year on page load (to immediately show the current leader).
If using a dropdown, consider grouping years by decade for easier navigation if the list is long.
The output should be styled distinctly (perhaps in a comic caption style box or a highlight color) to draw attention.
Responsive behavior: On mobile, make sure the year input and result are stacked vertically (to avoid horizontal squeezing). Use large tap-friendly controls.
Accessibility: Aside from visuals, include an ARIA live region for the result text so screen readers announce the updated result when the year is changed.
By implementing the calendar feature in the homepage (or a dedicated page), users can interactively explore the lore. For instance, if they choose 1988, the script might find that Lao New Year’s Day 1988 was a Thursday, thus “1988 – Led by Nang Khilini (Thursday princess)”​
medium.com
. This not only adds a fun interactive element but also educates users about the cyclical nature of the sisters’ roles.
Visual Style and Design Recommendations
To achieve a comic book meets mythological feel, consider the following design best practices:
Color Scheme: Use vibrant, rich colors that evoke both festival energy and fantasy. Lao New Year is festive (think golds, reds, bright blues from water and sky). Each sister could be associated with a color (as implied by their gemstone or flower – e.g. ruby red for Sunday, emerald green for Thursday​
andrewandterry.net
​
andrewandterry.net
). You could have the site’s palette draw from these colors. For example, the homepage hero might use the current sister’s color as an accent. Ensure contrast for readability (bright text on dark backgrounds or vice versa).
Typography:
For titles/headings: Choose a font with a bit of character – perhaps a comic-style font or a fantasy display font. Avoid anything too hard to read; it should still be clean. A subtle textured font or one with a slight whimsical flair can work for character names or section titles.
For body text: Use a legible font (a sans-serif or a readable serif). Since it’s mythology content, a serif can give a classic storybook feel, whereas a clean sans-serif can keep it modern and easy to read on screens. Keep sizes comfortable (e.g. 16px or larger).
Avoid using Comic Sans (cliché and not truly comic-like)​
ux.stackexchange.com
 – instead opt for professional comic lettering fonts if available.
Imagery & Graphics: The illustrations of the characters will be central. Style these images with comic sensibilities:
Give them bold outlines or shading reminiscent of comic art.
You might incorporate panels or frames around images. For instance, a character portrait could appear as if it’s on a comic trading card with a border, or a story excerpt could be inside a speech bubble or panel frame.
Use small icons to represent each sister’s attributes (for example, an icon of a tiger for Monday, a conch shell for Sunday, etc.) next to text, to add visual interest and break up text blocks.
Layout & Backgrounds: A comic style site often has dynamic layouts, but be careful to maintain clarity:
Use sections with different background colors or textures to create a panel-like separation. For example, the homepage hero might have a dramatic background (an abstract illustration or a burst pattern), then the calendar section on a plain white or dark background, then another colored section for characters.
You can include subtle halftone dot patterns or comic motion lines in backgrounds of sections to nod to comic art, but keep it subtle so as not to distract from text.
Incorporate traditional Lao motifs (like temple patterns, the dok champa flower silhouette, etc.) blended into the design. For example, a border that looks like a Lao textile pattern around the content area, or watermark-style illustrations of Mount Sumeru or the sisters’ animals in the background at low opacity. These touches reinforce the mythological theme.
Interactive Flair: Little touches can enhance the comic feel:
When hovering over character thumbnails or menu items, you could use a JavaScript effect to display a “speech bubble” tooltip with a fun quote or title. For instance, hovering over Thammaban’s link might show a bubble saying “Riddle me this…”.
Use transition effects: e.g. when the calendar result updates, briefly highlight the result (flash the background or use a fade-in) to mimic the excitement of a page turn reveal.
If feasible, use a custom cursor or sound effects (like a page flip sound when switching pages or a subtle chime when the year result changes) to make the experience playful. Use sound sparingly and give controls to mute if you include it.
Best Practices: While being creative, ensure standard usability:
Responsive Design: Use CSS media queries to ensure the comic layout condenses well on mobile. Long text should have adequate line spacing. Images should be scalable (use relative units or max-width:100% to fit small screens).
Navigation Clarity: Comic sites can sometimes go wild with design, but always keep navigation obvious – e.g. distinct clickable buttons, an easy-to-find menu. A breadcrumb on story pages might help users return to the main stories list.
Consistency: Each page should feel like part of the same site theme. Use recurring motifs (same header style, repeat the comic borders theme, etc.). For example, if the profile pages use a comic-style frame around the character image, use that style for all profiles for consistency.
Accessibility: Ensure sufficient color contrast for text, add alt text for all images (e.g. “Illustration of Nang Kholaka riding a tiger”), and use semantic HTML (headings, lists) so screen readers and search engines can parse content easily.
Inspiration and References
To solidify the design, it can help to look at existing sites:
Comic Book Sites: Look at how Marvel or DC present character bios on their websites. They often have a bold image, clear sections for biography, and interactive elements for powers or related comics. Emulating a simplified version of that structure would work well for the sisters.
Mythology & Fantasy Designs: Drawing inspiration from fantasy game or lore websites (for example, sites about mythology, or fantasy games like an RPG wiki) can provide ideas on blending ornate mythic style with web design. Many use decorative borders and thematic icons which could inspire the Lao motifs integration.
Webcomic Layouts: Check out popular webcomic websites for how they layout comic strips and navigation. Many webcomics use a simple centered image with “Next/Prev” buttons – effective and easy to implement. Others have more elaborate viewers, which you might use if the comics are a major feature.
In summary, the site’s organization should ensure each major content type has its place (profiles, stories, interactive fun), and the design should engage users with a vibrant comic-book style while honoring the Lao mythological theme. By following this plan – clear page structures, an interactive calendar grounded in cultural lore, and a rich visual style – the website will be both informative and immersive, inviting users to explore the world of the Nang Sangkhan sisters with ease and excitement.