<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Digi shop list</title>
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
	
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>

	<style>
		.bg-black-alt  {
			background:#ffffff;
		}
		.text-black-alt  {
			color:#ffffff;
		}
		.border-black-alt {
			border-color: #ffffff;
		}
		
	</style>

</head>
<body class="bg-black-alt font-sans leading-normal tracking-normal">

<nav id="header" class="bg-gray-900 fixed w-full z-10 top-0 shadow">
	

		<div class="w-full container mx-auto flex flex-wrap items-center mt-0 pt-3 pb-3 md:pb-0">
				
			<div class="w-1/2 pl-2 md:pl-0">
				<a class="text-gray-100 text-base xl:text-xl no-underline hover:no-underline font-bold"  href="#"> 
					<i class="fas fa-moon text-blue-400 pr-3"></i> Digi shop list
				</a>
            </div>
			<div class="w-1/2 pr-0">
				<div class="flex relative inline-block float-right">
				
				  <div class="relative text-sm text-gray-100">
				  </div>


					<div class="block lg:hidden pr-4">
					<button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-100 hover:border-teal-500 appearance-none focus:outline-none">
						<svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
					</button>
				</div>
				</div>

			</div>


			<div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-gray-900 z-20" id="nav-content">
				<ul class="list-reset lg:flex flex-1 items-center px-4 md:px-0">
					<li class="mr-6 my-2 md:my-0">
                        <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-blue-400 no-underline hover:text-gray-100 border-b-2 border-blue-400 hover:border-blue-400">
                            <i class="fas fa-home fa-fw mr-3 text-blue-400"></i><span class="pb-1 md:pb-0 text-sm">Home</span>
                        </a>
                    </li>
					<li class="mr-6 my-2 md:my-0">
                        <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900  hover:border-pink-400">
                            <i class="fas fa-tasks fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Tasks</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900  hover:border-purple-400">
                            <i class="fa fa-envelope fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Messages</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900  hover:border-green-400">
                            <i class="fas fa-chart-area fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Analytics</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900  hover:border-red-400">
                            <i class="fa fa-wallet fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Payments</span>
                        </a>
                    </li>
				</ul>
			</div>
			
		</div>
	</nav>

	<!--Container-->
	<div class="container w-full mx-auto pt-20">
		
		<div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
			
			<!--Console Content-->
			
            <div class="col-md-9" style="margin-left:150px;margin-top:75px;">
    <a href="{{route('insertdigi')}}" class="btn btn-primary"> add digi </a>
    <table class="table table-bordered" style="margin-top:20px;">
        <thead>
            <th><h4>Id</h4></th>
            <th><h4>Title</h4></th>
            <th><h4>CPU</h4></th>
            <th><h4>RAM</h4></th>
            <th><h4>price</h4></th>
            <th><h4>picture</h4></th>
            <th><h1>Activities</h1></th>
        </thead>
            <tbody>
                @foreach($digis as $digi)
                    <tr>
                        <td><h6>{{$digi->id}}</h6></td>
                        <td><h6>{{$digi->title}}</h6></td>
                        <td><h6>{{$digi->CPU}}</h6></td>
                        <td><h6>{{$digi->RAM}}</h6></td>
                        <td><h6>{{$digi->price}}</h6></td>
                        <td><h6>{{$digi->picture}}</h6></td>
                        <td>
                            <form action="{{url('deletedigi',['id' => $digi->id])}}" value="delete" method="post">
                                <input class="btn btn-danger deletesubmit" type="submit" value="Delete" />
                                @method('delete')
                                @csrf
                            | <a href="{{route('updatedigi',['id'=>$digi->id])}}" class="btn btn-warning">Update</a> 
                            | <a href="{{route('showdigi',['id'=>$digi->id])}}" class="btn btn-success">Show</a> </form>
                        </td>
                    </tr>
                @endforeach
    </table>
</div>
                </div>
            </div>				
		</div>
	</div> 
	<!--/container-->	
	<footer class="bg-gray-900 border-t border-gray-400 shadow">	
		<div class="container max-w-md mx-auto flex py-8">

			<div class="w-full mx-auto flex flex-wrap">
				<div class="flex w-full md:w-1/2 ">
					<div class="px-8">
						<h3 class="font-bold font-bold text-gray-100">About</h3>
						<p class="py-4 text-gray-600 text-sm">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel mi ut felis tempus commodo nec id erat. Suspendisse consectetur dapibus velit ut lacinia. 
						</p>
					</div>
				</div>
				
				<div class="flex w-full md:w-1/2">
					<div class="px-8">
					<h3 class="font-bold font-bold text-gray-100">Social</h3>
						<ul class="list-reset items-center text-sm pt-3">
						  <li>
							<a class="inline-block text-gray-600 no-underline hover:text-gray-100 hover:text-underline py-1" href="#">Add social link</a>
						  </li>
						  <li>
							<a class="inline-block text-gray-600 no-underline hover:text-gray-100 hover:text-underline py-1" href="#">Add social link</a>
						  </li>
							<li>
							<a class="inline-block text-gray-600 no-underline hover:text-gray-100 hover:text-underline py-1" href="#">Add social link</a>
						  </li>
						</ul>
					</div>
				</div>
			</div>
        

		
		</div>
	</footer>

<script>
	
	
	/*Toggle dropdown list*/
	/*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

	var userMenuDiv = document.getElementById("userMenu");
	var userMenu = document.getElementById("userButton");
	
	var navMenuDiv = document.getElementById("nav-content");
	var navMenu = document.getElementById("nav-toggle");
	
	document.onclick = check;

	function check(e){
	  var target = (e && e.target) || (event && event.srcElement);

	  //User Menu
	  if (!checkParent(target, userMenuDiv)) {
		// click NOT on the menu
		if (checkParent(target, userMenu)) {
		  // click on the link
		  if (userMenuDiv.classList.contains("invisible")) {
			userMenuDiv.classList.remove("invisible");
		  } else {userMenuDiv.classList.add("invisible");}
		} else {
		  // click both outside link and outside menu, hide menu
		  userMenuDiv.classList.add("invisible");
		}
	  }
	  
	  //Nav Menu
	  if (!checkParent(target, navMenuDiv)) {
		// click NOT on the menu
		if (checkParent(target, navMenu)) {
		  // click on the link
		  if (navMenuDiv.classList.contains("hidden")) {
			navMenuDiv.classList.remove("hidden");
		  } else {navMenuDiv.classList.add("hidden");}
		} else {
		  // click both outside link and outside menu, hide menu
		  navMenuDiv.classList.add("hidden");
		}
	  }
	  
	}

	function checkParent(t, elm) {
	  while(t.parentNode) {
		if( t == elm ) {return true;}
		t = t.parentNode;
	  }
	  return false;
	}


</script>

</body>
</html>
