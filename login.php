<?php
include "navbar.php"
?>
<?php
if(isset($_POST['login']))
{
    $email = $_POST['lemail'];
    $pass = $_POST['lpass'];
    $sLogin = "select * from doctors where email = '$email'";
    $resultLogin = mysqli_query($conn, $sLogin);
    $checkPass = mysqli_fetch_assoc($resultLogin);
    $numLogin = mysqli_num_rows($resultLogin);
    // echo $numLogin;
    if ($numLogin == 0) {
        header('location: login.php?error=1&msg=User does not exist, sign up');
    }
    else if ($checkPass['status'] == '0') {
        header('location: login.php?error=1&msg=Please wait for the admin to activate your account');
    } 
    else if ($numLogin != 0 && password_verify($pass, $checkPass['password'])) {
        $_SESSION['email'] = $checkPass['email'];
        $_SESSION['id'] = $checkPass['id'];
        header('location: doctors/index.php');

    
    }
    else
    {
        header('location: login.php?error=1&msg=Incorrect Password or Email');

    }

}
?>

<?php
        if (isset($_GET['error'])) {
            if ($_GET['error'] == '1') {
                $msg = $_GET['msg'];
                echo "<div class='container' id='alertbox'>
                <div class='container bg-red-500 flex items-center text-white text-sm font-bold px-4 py-3 relative'
                    role='alert'>
                    <svg class='fill-current w-4 h-4 mr-2' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'>
                        <path
                            d='M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z' />
                    </svg>
                    <p>$msg</p>
        
                    <span class='absolute top-0 bottom-0 right-0 px-4 py-3 closealertbutton'>
                        <svg class='fill-current h-6 w-6 text-white' role='button' xmlns='http://www.w3.org/2000/svg'
                            viewBox='0 0 20 20'>
                            <title>Close</title>
                            <path
                                d='M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z' />
                        </svg>
                    </span>
                </div>
            </div>";
            }
        } else if (isset($_GET['success'])) {
            if ($_GET['success'] == '1') {
                $msg = $_GET['msg'];
                echo "<div class='container' id='alertbox'>
                <div class='container bg-green-500 flex items-center text-white text-sm font-bold px-4 py-3 relative'
                    role='alert'>
                    <svg class='fill-current w-4 h-4 mr-2' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'>
                        <path
                            d='M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z' />
                    </svg>
                    <p>$msg</p>
        
                    <span class='absolute top-0 bottom-0 right-0 px-4 py-3 closealertbutton'>
                        <svg class='fill-current h-6 w-6 text-white' role='button' xmlns='http://www.w3.org/2000/svg'
                            viewBox='0 0 20 20'>
                            <title>Close</title>
                            <path
                                d='M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z' />
                        </svg>
                    </span>
                </div>
            </div>";
            }
        }
    ?>
<div class="py-6">
    <form action="" method="post">
  <div class="flex  rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
        <div class="hidden lg:block lg:w-1/2 " style="background-image:url('https://www.businessinsider.in/photo/69795001/how-to-become-a-doctor.jpg?imgsize=137197')"></div>
        <div class="w-full p-8 lg:w-1/2">
            <h2 class="text-2xl font-semibold text-700 text-center">DOC APP</h2>
            <p class="text-xl text-600 text-center">Welcome back!</p>
            <a href="#" class="flex items-center justify-center mt-4  rounded-lg shadow-md hover:bg-gray-500">
                <div class="px-4 py-3">
                <img class="h-6 w-6" viewBox="0 0 40 40" src="https://img.icons8.com/external-itim2101-lineal-color-itim2101/64/000000/external-admin-network-technology-itim2101-lineal-color-itim2101-1.png"/>
                </div>
                <h1 class="px-4 py-3 w-5/6  font-bold">Admin Login</h1>
            </a>
            <div class="mt-4 flex items-center justify-between">
                <span class="border-b w-1/5 lg:w-1/4"></span>
                <p  class="text-xs text-center text-500 uppercase">Login with Email</p>
                <span class="border-b w-1/5 lg:w-1/4"></span>
            </div>
            <div class="mt-4">
                <label class="block text-700 text-sm font-bold mb-2">Email Address</label>
                <input name="lemail" class="bg-200 text-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" placeholder="example@example.com" type="email">
            </div>
            <div class="mt-4">
                <div class="flex justify-between">
                    <label class="block text-700 text-sm font-bold mb-2">Password</label>
                    <a href="#" class="text-xs text-500">Forget Password?</a>
                </div>
                <input name="lpass" class="bg--200 text-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" placeholder="Enter Password" type="password">
            </div>
            <div class="mt-8">
                <button type="submit" name="login" class="btn btn-primary text-white font-bold py-2 px-4 w-full rounded hover:">Login</button>
            </div>
            <div class="mt-4 flex items-center justify-between">
                <span class="border-b w-1/5 md:w-1/4"></span>
                <a href="register.php" class="text-xs text-500 uppercase">or sign up</a>
                <span class="border-b w-1/5 md:w-1/4"></span>
            </div>
        </div>
    </div>
    </form>
</div>



<?php
include "footer.php"
?>