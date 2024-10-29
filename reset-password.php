<?php define("PAGE_TITLE", "Login"); ?>

<?php require_once './includes/header.php' ?>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <h2 class="mt-40 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Enter your new password</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="#" method="POST">

            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm/6 font-medium text-gray-900">New Password</label>

                </div>
                <div class="mt-2">
                    <input id="password" name="password" type="password" required class="block w-full rounded-md border-0 py-1.5 px-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>

            </div>
            <div>
                <div class="flex items-center justify-between">
                    <label for="confirm_password" class="block text-sm/6 font-medium text-gray-900">Confirm New Password</label>

                </div>
                <div class="mt-2">
                    <input id="confirm_password" name="confirm_password" type="password" required class="block w-full rounded-md border-0 py-1.5 px-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>

            </div>

            <div>
                <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
            </div>
        </form>

        <div class="mt-5">
            <button type="submit" class="flex w-full justify-center rounded-md bg-blue-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in with Google</button>
        </div>

        <p class="mt-10 text-center text-sm/6 text-gray-500">
            Already have an account?
            <a href="login.php" class="font-semibold text-indigo-600 hover:text-indigo-500">Login </a>to view your messages
        </p>
    </div>
</div>


<?php require_once './includes/footer.php' ?>