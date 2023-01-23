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
					<i class="fas fa-moon text-blue-400 pr-3"></i> Insert Digi form
				</a>
            </div>
			<div class="w-1/2 pr-0">
				<div class="flex relative inline-block float-right">
				
				  <div class="relative text-sm text-gray-100">
				  </div>
			</div>
			</div>
		</div>
	</nav>
<div class="col-md-6" style="margin-left:575px;margin-top:75px;">
    <form action="{{route('insertdigipost')}}" method="POST">
        <div class="form-row">
            <div class="form-group">
        @csrf
                <label for="title"><h3>Title</h3></label>
                <input id="title" type="text" class="form-control" name='title' value="" placeholder="Title"  >
                <label for="CPU"><h3>CPU</h3></label>
                <input id="CPU" type="text" class="form-control" name='CPU' value="" placeholder="CPU"  >
                <label for="RAM"><h3>RAM</h3></label>
                <input id="RAM" type="text" class="form-control" name='RAM' value="" placeholder="RAM"  >
                <label for="price"><h3>price</h3></label>
                <input id="price" type="text" class="form-control" name='price' value="" placeholder="price"  >
                <label for="picture"><h3>picture</h3></label>
                <input id="picture" type="text" class="form-control" name='picture' value="" placeholder="picture"  >
                
            </div>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="save">
        </div>
    </form>
</div>
</body>
</html>