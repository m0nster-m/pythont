# pythont
projectg
*
{
	padding: 0;
	margin: 0;
	text-decoration: none;
	list-style: none;
}
body
{
	font-family: monospace;
	background-color: #9eabe4;
background-image: linear-gradient(315deg, #9eabe4 0%, #77eed8 74%);

	
}
nav
{
	background: black;
	height: 80px;
	width: 100%;
}
label.logo
{
	color: white;
	font-size: 35px;
	line-height: 80px;
	padding: 0 100px;
	font-weight: bold;
}
nav ul
{
	float: right;
	margin-right: 20px;
}
nav ul li
{
	display: inline-block;
	line-height: 67px;
	margin: 0 5px;
}
nav ul li a
{
	position: relative;
	display: inline-block;
	color: #2196f3;
	letter-spacing: 4px;
	overflow: hidden;
	transition: 0.2s;
	font-size: 17px;
	padding: 7px 13px;
	border-radius: 3px;
	text-transform: uppercase;
}
a:hover
{
	color: #255784;
	background: #2196f3;
	box-shadow: 0 0 10px #2196f3, 0 0 20px #2196f3, 0 0 40px #2196f3;
	transition-delay: 1s;
}
.chkbtn
{
	font-size: 30px;
	color: white;
	float: right;
	line-height: 70px;
	margin-right: 40px;
	cursor: pointer;
	display: none;
}
#check
{
	display: none;
}
@media (max-width: 952px)
{
	label.logo
	{
		font-size: 30px;
		padding-left: 50px;
	}
	nav ul li a
	{
		font-size: 16px;
	}
}
@media (max-width: 858px)
{
	.chkbtn
	{
		display: block;
	}
	ul
	{
		position: fixed;
		width: 100%;
		height: 100vh;
		background: #2c3e50;
		top: 80px;
		left: -100%;
		text-align: center;
		transition: all .5s;
	}
	nav ul li
	{
		display: block;
		margin: 50px 0;
		line-height: 30px;
	}
	nav ul li a
	{
		font-size: 20px; 
	}
	a:hover,a.active
	{
		background: none;
		color: #0082e6;
		size: 80px;
	}
	#check:checked ~ ul
	{
		left: 0;
	}
}
a span
{
	position: absolute;
	display: block;
}
a span:nth-child(1)
{
	top: 0;
	left: -100%;
	width: 100%;
	height: 2px;
	background: linear-gradient(90deg,transparent,#2196f3);
}
a:hover span:nth-child(1)
{
	left: 100%;
	transition: 1s;
}
a span:nth-child(3)
{
	bottom: 0;
	right: -100%;
	width: 100%;
	height: 2px;
	background: linear-gradient(270deg,transparent,#2196f3);
}
a:hover span:nth-child(3)
{
	right: 100%;
	transition: 1s;
	transition-delay: 0.5s;
}
a span:nth-child(2)
{
	top: -100%;
	right: 0;
	width: 2px;
	height: 100%;
	background: linear-gradient(180deg,transparent,#2196f3);
}
a:hover span:nth-child(2)
{
	top: 100%;
	transition: 1s;
	transition-delay: 0.25s;
}
a span:nth-child(4)
{
	bottom: -100%;
	left: 0;
	width: 2px;
	height: 100%;
	background: linear-gradient(360deg,transparent,#2196f3);
}
a:hover span:nth-child(4)
{
	bottom: 100%;
	transition: 1s;
	transition-delay: 0.75s;
}	
