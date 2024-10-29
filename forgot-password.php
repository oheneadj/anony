<?php define("PAGE_TITLE", "Login"); ?>

<?php require_once './includes/header.php' ?>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <h2 class="mt-40 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Forgot your password </h2>
        <p class="text-center text-gray-900">Enter your email and we will send you a link to reset your password</p>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="#" method="POST">
            <div>
                <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
                <div class="mt-2">
                    <input id="email" name="email" type="email" placeholder="Eg. example@email.com" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 px-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
            </div>


            <div>
                <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Send Reset Link</button>
            </div>
        </form>

        <p class="mt-10 text-center text-sm/6 text-gray-500">
            Don't have an account?
            <a href="register.php" class="font-semibold text-indigo-600 hover:text-indigo-500">Create an account </a> and start receiving messages
        </p>
    </div>
</div>


<?php require_once './includes/footer.php' ?>