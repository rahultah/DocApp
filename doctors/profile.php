<?php
include "navbar.php";

// echo $_SESSION['id'];
$q_pr = "select * from doctors where id = '$_SESSION[id]'";
$result_pr = mysqli_query($conn,$q_pr);
$num_pr = mysqli_num_rows($result_pr);
if($num_pr == 1)
{
  $row_pr = mysqli_fetch_assoc($result_pr);
  
}
if(isset($_POST['usubmit']))
{
	$id = $_SESSION['id'];
	$fname = $_POST['fname'];
	$dob = $_POST['dob'];
	$aline1 = $_POST['aline1'];
	$aline2 = $_POST['aline2'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$degree = $_POST['degree'];	
	$s = "UPDATE `doctors` SET `name`='$fname',`dob`='$dob',`aLine1`='$aline1',`aLine2`='$aline2',`state`='$state',`city`='$city',`zipcode`='$zip',`degree`='$degree' WHERE id = '$id'";
	$result = mysqli_query($conn,$s);
	// header('location: sample.php');


}

?>
<script>
	function enableEdit() {
    $('input').prop('readonly', false);
    $('#emaill').prop('readonly', true);

}
</script>

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
<div class="container mx-auto">
			<div class="flex justify-center px-6 my-12">
				<!-- Row -->
				<div class="w-full xl:w-3/4 lg:w-11/12 flex">
					<!-- Col -->
					<div
						class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
						style="background-image: url('https://www.expatica.com/app/uploads/2018/11/find-a-doctor-abroad-1920x1080.jpg')"
					></div>
					<!-- Col -->
					<div class="w-full lg:w-7/12  p-5 rounded-lg lg:rounded-l-none">
						<h3 class="pt-4 text-2xl text-center">My Profile    <button type="button" id="pfEdit" value="nameStaff" onclick="enableEdit()" class="btn btn-default btn-sm editbut"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg></button></h3>
                        
						<form action="upsample.php" method="POST" class="px-8 pt-6 pb-8 mb-4  rounded">
							<div class="mb-4 md:flex md:justify-between">
								<div class="mb-4 md:mr-2 md:mb-0">
									<label class="block mb-2 text-sm font-bold -700" for="firstName">
										Full Name
									</label>
									<input
                                    readonly = "true"
										class="w-full px-3 py-2 text-sm leading-tight -700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
										id="fname"
										name="fname"
										type="text"
										placeholder="Full Name"
										value="<?php if(isset($_SESSION['id'])){echo $row_pr['name'];}?>"
									/>
								</div>
                                <div class="md:ml-2">
									<label class="block mb-2 text-sm font-bold -700" for="lastName">
										Date of birth
									</label>
									<input
                                    readonly = "true"
										class="w-full px-3 py-2 text-sm leading-tight -700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
										id="lastName"
										name="dob"
										type="date"
										placeholder=""
										value="<?php if(isset($_SESSION['id'])){echo $row_pr['dob'];}?>"
									/>
								</div>
								<div class="md:ml-2">
									<label class="block mb-2 text-sm font-bold -700" for="lastName">
										Email
									</label>
									<input
                                    readonly = "true"
										class="w-full px-3 py-2 text-sm leading-tight -700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
										id="emaill"
										type="email"
										placeholder="Email"
										value="<?php if(isset($_SESSION['id'])){echo $row_pr['email'];}?>"
									/>
								</div>
                                
							</div>
							<div class="mb-4">
								<label class="block mb-2 text-sm font-bold -700" for="aline1">
                                Address Line 1
								</label>
								<input
                                readonly = "true"
									class="w-full px-3 py-2 mb-3 text-sm leading-tight -700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									id="aline1"
									name="aline1"
									type="text"
									placeholder="Line 1"
									value="<?php if(isset($_SESSION['id'])){echo $row_pr['aLine1'];}?>"
								/>
							</div>
                            <div class="mb-4">
								<label class="block mb-2 text-sm font-bold -700" for="aline2">
									Address Line 2
								</label>
								<input
                                readonly = "true"
									class="w-full px-3 py-2 mb-3 text-sm leading-tight -700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									id="aline2"
									name="aline2"
									type="text"
									placeholder="Line 2"
									value="<?php if(isset($_SESSION['id'])){echo $row_pr['aLine2'];}?>"
								/>
							</div>
							<div class="mb-4 md:flex md:justify-between">
								
								<div class="md:ml-2">
									<label class="block mb-2 text-sm font-bold -700" for="city">
										City
									</label>
									<input
                                    readonly = "true"
										class="w-full px-3 py-2 mb-3 text-sm leading-tight -700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
										id="city"
										name="city"
										type="text"
										placeholder="******************"
										value="<?php if(isset($_SESSION['id'])){echo $row_pr['city'];}?>"
									/>
								</div>
                                <div class="md:ml-2">
									<label class="block mb-2 text-sm font-bold -700" for="c_password">
										State
									</label>
									<input
                                    readonly = "true"
										class="w-full px-3 py-2 mb-3 text-sm leading-tight -700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
										id="state"
										name="state"
										type="text"
										placeholder="******************"
										value="<?php if(isset($_SESSION['id'])){echo $row_pr['state'];}?>"
									/>
								</div>
                                <div class="md:ml-2">
									<label class="block mb-2 text-sm font-bold -700" for="c_password">
										Zipcode
									</label>
									<input
                                    readonly = "true"
										class="w-full px-3 py-2 mb-3 text-sm border rounded  appearance-none focus:outline-none focus:shadow-outline"
										id="zip"
										name="zip"
										type="text"
										placeholder="******************"
										value="<?php if(isset($_SESSION['id'])){echo $row_pr['zipcode'];}?>"
									/>
								</div>
                                
							</div>
                            <div class="mb-4">
								<label class="block mb-2 text-sm font-bold -700" for="aline2">
									Degree
								</label>
								<input
                                readonly = "true"
									class="w-full px-3 py-2 mb-3 text-sm leading-tight -700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									id="degree"
									name="degree"
									type="text"
									placeholder="MBBS"
									value="<?php if(isset($_SESSION['id'])){echo $row_pr['degree'];}?>"
								/>
							</div>
							<div class="mb-6 text-center">
								<button
									class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
									name="usubmit" type="submit"
								>
									Update Profile
								</button>
							</div>
							<div class="mb-6 text-center">
								<button
									class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
									name="samplesubmit" type="submit"
								>
									Generate Sample Prescription 
								</button>
							</div>
							<input type="text" style="visibility: hidden;" name="phone" value="<?php if(isset($_SESSION['id'])){echo $row_pr['phone'];}?>">
						</form>
						
					</div>
				</div>
			</div>
		</div>

<?php include "footer.php"?>