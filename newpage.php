<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
</head>

<body>
    <section id="contactus" class="contact">
        <h2>Get In Touch</h2>
        <form method="POST" action="https://formspree.io/f/xblrwokd">
            <div>
                <input
                    type="text"
                    id="firstName"
                    name="firstName"
                    placeholder="First Name"
                    required />
            </div>
            <div>
                <input
                    type="text"
                    id="lastName"
                    name="lastName"
                    placeholder="Last Name" />
            </div>
            <div>
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Your Email Address"
                    required />
            </div>
            <div>
                <input
                    type="tel"
                    id="phone"
                    name="phone"
                    placeholder="Phone No (Optional)" />
            </div>
            <div>
                <textarea
                    id="message"
                    name="message"
                    rows="6"
                    placeholder="Message"
                    required></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>

        <script>
            // Initialize EmailJS
            emailjs.init('lQWPUUHSWUOJ-YJlW');

            // Handle form submission
            document.getElementById('contact-form').addEventListener('submit', function(e) {
                e.preventDefault();

                const form = e.target;
                const formData = new FormData(form);

                emailjs.sendForm('service_4hh91su', 'template_7yp8ey9', formData)
                    .then((response) => {
                        console.log('SUCCESS!', response);
                        alert('Message sent successfully!');
                        form.reset(); // Reset form fields
                    })
                    .catch((error) => {
                        console.error('Failed to send message:', error);
                        alert('Failed to send message. Please try again later.');
                    });
            });
        </script>
    </section>
</body>

</html>