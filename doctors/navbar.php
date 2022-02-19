<?php

include "top.php";

?>

<!DOCTYPE html>
<html data-theme="light">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../assets/css/tail.css" rel="stylesheet" />
</head>

<body>
    <div class="navbar mb-2 shadow-lg   rounded-box">
        <div class="flex-1 px-2 mx-2">
            <a href="index.php">
            <span class="text-lg font-bold">
              DOCAPP
            </span>
            </a>
        </div>
        <div class="flex-none hidden px-2 mx-2 lg:flex">
        <div class="dropdown dropdown-left dropdown-hover">
                    <div tabindex="0"><div class="avatar">
                    <div class="rounded-full w-10 h-10 ">
                        <img src="https://i.pravatar.cc/500?img=32">
                    </div>
                    </div></div> 
                    <ul tabindex="0" class="p-2 shadow menu dropdown-content bg-base-100 rounded-box w-52">
                        <li>
                        <a href="profile.php">
                            My Profile

                        </a>
                        </li> 
                        <li>
                        <a href="../logout.php">
                        Logout

                        </a>
                        </li> 
                        
                    </ul>
                    </div>
            <div class="flex items-stretch">
                <a href="presc.php" class="btn btn-ghost btn-sm rounded-btn">
                  Make Prescription

                </a>
                
               
                
                <div class="dropdown dropdown-hover dropdown-left">
                    <div tabindex="0" class="btn btn-ghost btn-sm rounded-btn">Change Theme</div>
                    <ul tabindex="0" class="p-2 shadow menu dropdown-content bg-base-100 rounded-box w-52">
                        <li>
                            <a onclick="changeTheme('dark')">🌚  dark</a>
                        </li>
                        <li>
                            <a onclick="changeTheme('light')">🌝  light</a>
                        </li>

                    </ul>
                </div>
                <div class="flex-none">
                
                    
                </div>
                </div>
                

            </div>
        </div>
        <div class="flex-none lg:hidden">
            <div class="dropdown dropdown-hover dropdown-left">
                <div tabindex="0" class="m-1 btn"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-6 h-6 stroke-current">           
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>               
            </svg></div>
                <ul tabindex="0" class="menu w-64 border dropdown-content bg-base-100 rounded-box">
                    <li>
                        <a>
                      Link
                    </a>
                    </li>
                    <li>
                        <a>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 mr-2 stroke-current">        
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path> 
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>                 
                  </svg> Link with icon

                        </a>
                    </li>
                    <li>
                        <a>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 mr-2 stroke-current">          
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>                
                  </svg> With badge

                            <div class="badge ml-2 success">3</div>
                        </a>
                    </li>
                </ul>
            </div>

            </button>
        </div>
    </div>