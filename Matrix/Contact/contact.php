<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../Content/Matrix-Brackets-logo-transparant.png" type="image/x-icon">
    <link rel="stylesheet" href="../navbar/navbar.css">
    <link rel="stylesheet" href="contact.css">
    <title>Matrix | About</title>
</head>

<body>
    <?php include '../navbar/navbar.php'; ?>
    <div id="particles-js"></div>
    <div class="page1ContainerBackground">
        <div class="page1ContainerTitel">
            <h1>Contact</h1>
        </div>
    </div>
    <div class="page2container">
        <div id="container">
            <h2>&bull; Keep in Touch &bull;</h2>
            <div class="underline">
            </div>
            <div class="icon_wrapper">
                <svg class="icon" width="215px" height="215px" viewBox="0 0 17.00 17.00" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="si-glyph si-glyph-mail-box" fill="#000000" stroke="#000000" transform="rotate(0)">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#ff2e2e" stroke-width="0.612"></g>
                    <g id="SVGRepo_iconCarrier">
                        <title>753</title>
                        <defs> </defs>
                        <g stroke-width="0.00017" fill="none" fill-rule="evenodd">
                            <path d="M15.51,0.053 C14.699,0.037 14.028,0.683 14.012,1.495 C14.01,1.611 14.024,1.723 14.047,1.831 L12.99,2.893 C12.941,0.986 11.521,0.025 9.969,0.025 C8.686,0.025 7.043,1.153 7.043,3.158 C7.043,3.97 7.084,6.938 7.084,6.938 L8.072,6.938 L8.072,10.505 L4.578,6.938 L5.957,6.938 L5.918,3.074 C5.918,1.153 6.834,0.025 8,0.025 L4,0.025 C2.094,0.025 1,1.059 1,3.063 L1,6.938 L3.41,6.938 L8.072,11.67 L8.072,16 L9.918,16 L9.918,6.938 L13,6.938 L13,4.184 L14.535,2.643 C14.783,2.854 15.097,2.991 15.449,2.997 C16.261,3.015 16.931,2.368 16.947,1.556 C16.963,0.744 16.32,0.069 15.51,0.053 L15.51,0.053 Z M11.043,3.167 L8.918,3.167 L8.918,2.001 L11.043,2.001 L11.043,3.167 L11.043,3.167 Z" fill="#434343" class="si-glyph-fill"> </path>
                        </g>
                    </g>
                </svg>
            </div>
            <form action="#" method="post" id="contact_form">
                <div class="name">
                    <label for="name"></label>
                    <input type="text" placeholder="My name is" name="name" id="name_input" required>
                </div>
                <div class="email">
                    <label for="email"></label>
                    <input type="email" placeholder="My e-mail is" name="email" id="email_input" required>
                </div>
                <div class="telephone">
                    <label for="name"></label>
                    <input type="text" placeholder="My number is" name="telephone" id="telephone_input" required>
                </div>
                <div class="subject">
                    <label for="subject"></label>
                    <select placeholder="Subject line" name="subject" id="subject_input" class="subject-input" required>
                        <option disabled hidden selected>Subject line</option>
                        <option>I'd like to book a DJ</option>
                        <option>I'd like to ask a question</option>
                    </select>
                </div>
                <div class="message">
                    <label for="message"></label>
                    <textarea name="message" placeholder="I'd like to chat about" id="message_input" cols="30" rows="5" required></textarea>
                </div>
                <div class="submit">
                    <input type="submit" value="Send Message" id="form_button" />
                </div>
            </form><!-- // End form -->
        </div><!-- // End #container -->
    </div>
</body>
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
<script src="../navbar/navMenu.js"></script>
<script src="./contact.js"></script>


</html>