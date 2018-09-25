/******************************************************************************\
 * Project:     Bee Fair
 * Description: Fair Trade Market
 * Author:      Arch A. Germann
 * Document:    custom js
\******************************************************************************/

function error()
{
	window.location.href = "error.html";
}

function sleep(ms)
{
	return new Promise(resolve => setTimeout(resolve, ms));
}

/* ASYNC loading exmaple
async function asyncLoading()
{
	console.log('Taking a break...');
	await sleep(2000);
	console.log('Two second later');
}

asyncLoading();
*/

// top button
$(document).ready(function()
{
	//set top button
	var back_to_top_button = ['<a href="#top" class="back-to-top"><img src="img/icons/arrow_top.png" width="48px" alt="Nach oben"></a>'].join("");
	$("body").append(back_to_top_button);
	$(".back-to-top").hide();

	//function for scrolling
	$(function () 
	{
		$(window).scroll(function () 
		{
			if ($(this).scrollTop() > 100) 			// 100 Pixel scrolled
			{ 
				$('.back-to-top').fadeIn();
			} 
			else 
			{
				$('.back-to-top').fadeOut();
			}
		});

		$('.back-to-top').click(function () 		// Click on button
		{
			$('body,html').animate(
			{
				scrollTop: 0
			}, 800);
			
			return false;
		});
	});
});
