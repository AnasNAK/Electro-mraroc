<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/login.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>login</title>
</head>

<body class="bg-[#FFF2DF] font-[sitika] ">

    <div>
        <div class="flex bg-[#685942] rounded-lg shadow-lg overflow-hidden mx-auto my-20 max-w-sm lg:max-w-4xl ">
            <div class="hidden my-auto lg:block lg:w-1/2 bg-cover flex flex-col justify-center items-center">
                <img class="w-max ml-5  flex justify-items-center rounded-2xl " src="../public/img/simplone.png" alt="">
            </div>
            <div class="w-full p-8 lg:w-1/2">
                <h2 class="text-2xl font-semibold text-white text-center">GlowGuru</h2>
                <p class="text-xl text-white text-center">Welcome back Admin!</p>

                <div class="mt-4 flex items-center justify-between">
                    <span class="border-b w-1/5 lg:w-1/4"></span>
                    <a href="#" class="text-xs text-center text-white uppercase">Enter Your Information</a>
                    <span class="border-b w-1/5 lg:w-1/4"></span>
                </div>
                <form action=" <?php echo URLROOT; ?>/Users/login " method="post">
                    <div class="mt-4">
                        <label class="block text-white text-sm font-bold mb-2">Usernam Or Email</label>
                        <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none
                         <?php echo (!empty($data['email_err'])); ?>" value="<?php echo $data['email']; ?>" type="text" name="email">
                        <span class="font-bold text-orange-200"><?php echo $data['email_err']; ?></span>
                    </div>
                    <div class="mt-4">
                        <div class="flex justify-between">
                            <label class="block text-white text-sm font-bold mb-2">Password</label>
                        </div>
                        <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" name="password" type="password" value="<?php echo $data['password']; ?>">
                        <span class="font-bold text-orange-200"><?php echo $data['password_err']; ?></span>
                    </div>
                    <div class="my-8 ">
                        <a href="<?php echo URLROOT; ?>/ "><button class="bg-white text-black font-bold py-2 px-4 w-full rounded duration-200 hover:bg-[#E8D0AC] hover:text-white">Login</button>
                        </a>

                    </div>
                    <div class=" mt-4 text-white text-end font-bold duration-200 hover:text-black">
                        <a href="<?php echo URLROOT; ?>/pages/index">Back To Home</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>