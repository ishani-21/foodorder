<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shopping cart </title>
</head>
<style>
@import url('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	
		
		section div{
			width: 22%;
			height: 93%;
			background:#f5f5f5;
			padding: 1%;
			position: relative;
		}
		
		
		section div span{
			position: absolute;
		    top: 14px;
		    left: 13px;
		    background: red;
		    width: 300px;
		    height: 186px;
		    display: none;
		}
		section div:nth-child(1)>span.active{
			animation: first 0.5s ease-in;
			z-index: 2;
			display: block;

		}
		section div:nth-child(2)>span.active{
			animation: second 0.5s ease-in;
			z-index: 2;
			display: block;

		}
		section div:nth-child(3)>span.active{
			animation: third 0.5s ease-in;
			z-index: 2;
			display: block;

		}
		section div:nth-child(4)>span.active{
			animation: four 0.5s ease-in;
			z-index: 2;
			display: block;

		}
		@keyframes first{
			to{
				width: 30px;
			    height: 20px;
			    left: 1290px;
			    top: -70px;
			}
		}
		@keyframes second{
			to{
				width: 30px;
			    height: 20px;
			    left: 948px;
			    top: -70px;
			}
		}
		@keyframes third{
			to{
				width: 30px;
			    height: 20px;
			    left: 606px;
			    top: -70px;
			}
		}
		@keyframes four{
			to{
				width: 30px;
			    height: 20px;
			    left: 265px;
			    top: -70px;
			}
		}
</style>
<body>
	<h1><i class=" fa fa-shopping-cart"></i></h1>
	<section>
		<div class="item">
			<img src="image/043.jpg">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, quo, modi ea voluptas tempora vero cumque incidunt eum animi</p>
			<h6>$345.89</h6>
			<span></span>
			<button>Add-cart</button>
			
		</div>
		<div class="item">
			<img src="image/044.jpg">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, quo, modi ea voluptas tempora vero cumque incidunt eum animi</p>
			<h6>$345.89</h6>
			<span></span>
			<button>Add-cart</button>
		</div>
		<div class="item">
			<img src="image/045.jpg">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, quo, modi ea voluptas tempora vero cumque incidunt eum animi</p>
			<h6>$345.89</h6>
			<span></span>
			<button>Add-cart</button>
		</div>
		<div class="item">
			<img src="image/046.jpg">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, quo, modi ea voluptas tempora vero cumque incidunt eum animi</p>
			<h6>$345.89</h6>
			<span></span>
			<button>Add-cart</button>
		</div>
	</section>
	<div class="select">
		
	</div>
</body>
</html>
<script type="text/javascript">
var noti = document.querySelector('h1');
	var button = document.getElementsByTagName('button');
	for(var but of button){
		but.addEventListener('click', (e)=>{
			var add = Number(noti.getAttribute('data-count') || 0);

			// image --animation to cart ---//
			var span = e.target.parentNode.querySelector('span');
			span.classList.add("active");
			setTimeout(()=>{
				span.classList.remove("active");
				span.removeChild(s_image);
			}, 500); 
			

			// copy and paste //
			
		})
	}
</script>