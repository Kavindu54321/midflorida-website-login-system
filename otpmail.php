<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('Location: index.php');
    exit();
}

if (isset($_POST['verify'])) {
    if (isset($_POST['otp']) && is_array($_POST['otp'])) {
        $userOtp = implode("", $_POST['otp']); // Join all 6 inputs

        if ($userOtp == $_SESSION['otp']) {
            unset($_SESSION['otp']);
            header('Location: success.php');
            exit();
        } else {
            $error = "Invalid OTP. Please try again.";
        }
    } else {
        $error = "Please enter the OTP.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OTP Verification</title>
    <style>
        body {
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            background: white;
            padding: 40px 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .otp-inputs {
        display: flex;
        justify-content: center;
        gap: 8px; /* <<< smaller space (was bigger before) */
        margin-bottom: 20px;
        }

        .otp-inputs input {
            width: 35px; /* smaller width */
            height: 45px; /* smaller height */
            font-size: 20px;
            text-align: center;
            border: 2px solid #ddd;
            border-radius: 6px;
            outline: none;
            transition: 0.3s;
        }


        .otp-inputs input:focus {
            border-color: #4CAF50;
            box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
        }

        button {
            background: #4CAF50;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #45a049;
        }

        .error {
            color: red;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Verify OTP</h2>
    <?php if (isset($error)) { echo "<p class='error'>$error</p>"; } ?>

    <form method="POST" id="otpForm">
        <div class="otp-inputs">
            <input type="text" name="otp[]" maxlength="1" required>
            <input type="text" name="otp[]" maxlength="1" required>
            <input type="text" name="otp[]" maxlength="1" required>
            <input type="text" name="otp[]" maxlength="1" required>
            <input type="text" name="otp[]" maxlength="1" required>
            <input type="text" name="otp[]" maxlength="1" required>
        </div>
        <button type="submit" name="verify">Verify</button>
    </form>
</div>

<script>
    const inputs = document.querySelectorAll('.otp-inputs input');

    inputs.forEach((input, index) => {
        input.addEventListener('input', () => {
            if (input.value.length > 0 && index < inputs.length - 1) {
                inputs[index + 1].focus();
            }
        });

        input.addEventListener('keydown', (e) => {
            if (e.key === 'Backspace' && input.value === '' && index > 0) {
                inputs[index - 1].focus();
            }
        });
    });
</script>

</body>
</html>
