<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.tailwindcss.com"></script>
	<script src="https://kit.fontawesome.com/a4fc922de4.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

	<title>
		<?php echo SITENAME ?>
	</title>
	<link rel="stylesheet" href="<?= URLROOT . '/public/css/SingUp.css' ?>">
	<link rel="icon" type="image/png" href="<?= URLROOT . '/img/upload/E.png' ?>" />
</head>

<!-- component -->

<body class="font-mono <body bg-[#3E3E3E] overflow-x-hidden">">
	<!-- Container -->
	<form action=" <?php echo URLROOT; ?> /Users/register" method="post">
	<?php var_dump(URLROOT)?>
		<div class="container mx-auto">
			<div class="flex justify-center px-6 my-12">
				<!-- Row -->
				<div class="w-full xl:w-3/4 lg:w-11/12 flex">
					<!-- Col -->
					<div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg" style="background-image: url('https://source.unsplash.com/Mv9hjnEUHR4/600x800')"></div>
					<!-- Col -->
					<div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
						<h3 class="pt-4 text-2xl text-center">Create an Account!</h3>
						<form class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
							<div class="mb-4 ">
								<div class="mb-4 md:mr-2 md:mb-0">
									<label class="block mb-2 text-sm font-bold text-gray-700" for="fulltName">
										FullName
									</label>
									<input class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="fullName" type="text" placeholder="FullName" name="fullname"
									value="<?= $data['fullname'] ?>"/>
									<span class="font-bold text-orange-200"><?php echo $data['fullname_err']; ?></span>
								</div>
							</div>
							<div class="mb-4">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="email">
									Email
								</label>
								<input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Email" name="email"
								value="<?= $data['email']?>"/>
								<span class="font-bold text-orange-200"><?php echo $data['email_err']; ?></span>
							</div>
							<div class="mb-4">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="number">
									Phone
								</label>
								<input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="email" type="number" placeholder="your phone number" name="phone"
								value="<?= $data['phone'] ?>"/>
								<span class="font-bold text-orange-200"><?php echo $data['phone_err']; ?></span>
							</div>
							<div class="mb-4 md:flex md:justify-between">
								<div class="mb-4 md:mr-2 md:mb-0">
									<label class="block mb-2 text-sm font-bold text-gray-700" for="password">
										Password
									</label>
									<input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************" name="password"
									value="<?= $data['password'] ?>"/>
									<span class="font-bold text-orange-200"><?php echo $data['password_err']; ?></span>
									<p class="text-xs italic ">Please choose a password.</p>
								</div>
								<div class="md:ml-2">
									<label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
										Confirm Password
									</label>
									<input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="c_password" type="password" placeholder="******************" name="confirm_password" 
									value="<?= $data['confirm_password']?>" />
									<span class="font-bold text-orange-200"><?php echo $data['confirm_password_err']; ?></span>
								</div>
							</div>
							<div class="mb-6 text-center">
								<input class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline" type="submit">
									Register Account
								</input>
							</div>
							<hr class="mb-6 border-t" />
							<div class="text-center">
								<a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="<?= URLROOT . '/Pages/index' ?>">
									Back to home
								</a>
							</div>
							<div class="text-center">
								<a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="<?= URLROOT . '/Users/login' ?>">
									Already have an account? Login!
								</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</form>
</body>