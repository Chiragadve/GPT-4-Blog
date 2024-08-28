# Project Name

GPT -4 Blog

## Description

This project is a comprehensive web application that includes a blog system, a contact form, and a section for showcasing new GPT versions. The main features include dynamic blog card generation, user contact form integration with Formspree, and accessibility enhancements.

## Features

- **Blog System**: Store and display blog entries with support for dynamic card generation based on content.
- **Contact Form**: Integrated with Formspree for handling user inquiries without redirection.
- **Accessibility**: Implemented accessibility features to ensure a user-friendly experience for all users.
- **Responsiveness**: Uses media queries to ensure the website is mobile-friendly.

## Technologies Used

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP (for dynamic content handling)
- **Database**: PHPMyAdmin (for storing blog data)
- **Form Handling**: Formspree
- **CSS Framework**: vanilla CSS
- **Animations**: Animate.css

## Setup and Installation

1. **Clone the Repository**

   `https://github.com/Chiragadve/GPT-4-Blog.git`

2. **Create A database and import sql file**

   `gpt_blog.sql`

3. **Open the Project in Your Browser**

   Navigate to `http://localhost` to view the application.

## Configuration

### Formspree Integration

1. **Contact Form**: The form is configured to use Formspree. Ensure you replace the `action` attribute with your Formspree endpoint:

   ```html
   <form
     id="contact-form"
     method="POST"
     action="https://formspree.io/f/xblrwokd"
   ></form>
   ```

2. **Handle Form Submission**: JavaScript code for handling form submission is included to prevent redirection and show custom messages.

### Database Configuration

1. **Database Tables**:
   `users` table with columns: `id`, `name`,`username`,`password`.

   - `posts` table with columns: `id`, `title`, `content`, `image`.

2. **Connection Details**: Ensure PHP scripts are configured to connect to your PHPMyAdmin instance.

## File Structure

- `index.html` - Main HTML page with the contact form and blog section.
- `styles.css` - Custom CSS for styling.
- `contact.js` - JavaScript for handling form submission.
- `blog.php` - PHP script for managing blog data.
- `formspree-config.js` - JavaScript configuration for Formspree.

## Usage

1. **Adding Blog Entries**: Use the `blog.php` page to add new blog entries. Entries will be dynamically generated on the blog section.
2. **Contact Form**: Users can submit inquiries via the contact form. The form will handle submissions through Formspree without redirection.

## Contact

For any inquiries, please contact [Chirag Adve](mailto:chiragadve4@gmail.com).
