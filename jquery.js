//===================================================================
//Get Methods

//.text()
//.html()
//.attr()
//.val()

//.text()
//----------
$(document).ready (function (){
var a = $(' #box p').text() ;
console. log (a) ;
});

//.html()
//----------
$(document).ready (function (){
var a = $(' #box p').html() ;
console. log (a) ;
});

//.attr()
//----------
$(document).ready (function (){
var a = $(' #box p').attr('classname') ;
console. log (a) ;
});

//.val()
//----------
$(document).ready (function (){
var a = $(' #name').val() ;
console. log (a) ;
});

//======================================================================================================================================
//======================================================================================================================================

//Set Methods

//.text()
//.html()
//.attr()
//.val()

//.text()
//------
$(document).ready (function (){
$('#clickbutton'). click (function () {
$(#box h2") .text ("Hello Yahoo baba");
});

//.html()
//------
$(document).ready (function (){
$('#clickbutton'). click (function () {
$(#box h2") .html ("Hello <b>Yahoo</b> baba");
});

//.attr()
//------
$(document).ready (function (){
$('#clickbutton'). click (function () {
$('#box h2').attr("class", "red") ;//set method attr do values lyta hia ak "attibute ka name(class,id,width etc)" dusrah attribute ki value(box,banner etc)
});

//.val()
//------
$(document) . ready(function (){
$('#sname'). val("Yahoo BaBA" ) ;
$('#sclass ') .val ("Btech") ;
});

======================================================================================================================================
======================================================================================================================================

//CSS Class Methods

//.addClass()
//.removeClass()
//.toggleClass()


//.addClass()
//------
$(document) . ready(function (){
$('#box'). addClass("clasname1 className2" ) ;
});

//OR

$(document) . ready(function (){
$('#box,h2,p'). addClass("className2" ) ;
});

//.removeClass()
//------
$(document) . ready(function (){
$('#box'). removeClass("className" ) ;
});

//.toggleClass()
//------
$(document) . ready(function (){
$('#box'). toggleClass("className" ) ;
});

//======================================================================================================================================
//======================================================================================================================================


//CSS Methods

$(document).ready (function (){
$('#clickbutton'). click (function () {
$(#box h2") .css ({"background":"red","color":"green"});
});

//======================================================================================================================================
//======================================================================================================================================

On() Method
$(document).ready(function(){
	$('#abc').on({click: function(){
	
	},
	mouseenter: function(){
		
}
});
})

//off() Method (on method ky upper jo events lagy hian unko remove karny kyliye off method use hota hia)
$(document).ready(function(){
	$("button").click(function(){
		$("#box").off("mouseover mouseout")
	});
	
});


//======================================================================================================================================
//======================================================================================================================================

//.append Method & .prepend Method (kise bi tag ky inner end ma kuch add karny kyliye .append use karingy or kise bi tag ky inner start ma kuch add karny kyliye .prepend use karingy)

	$("#appendbtn").click(function(){
		$("#box").append("<h2>Yarpa Mehdi</h2>")
	});
	
	$("#prependbtn").click(function(){
		$("#box").prepend("<h3>Yarpa Mehdi</h3>")
	});
//======================================================================================================================================
//=====================================================================================================================================	
	
//After() & Before() (kise bi tag ky  end ky bad ma kuch add karny kyliye .after use karingy or kise bi tag ky inner start se phly ma kuch add karny kyliye .before use karingy)

	$("#appendbtn").click(function(){
		$("#box").after("<h2>Yarpa Mehdi</h2>")
	});
	
	$("#prependbtn").click(function(){
		$("#box").before("<h3>Yarpa Mehdi</h3>")
	});
	
//======================================================================================================================================
//=====================================================================================================================================	

//Remove() & Empty()

	$("#emptybtn").click(function(){
		$("#box").empty()
	});
	
	$("#removebtn").click(function(){
		$("#box").remove()
	});
	
//======================================================================================================================================
//=====================================================================================================================================	

//Clone() Method

$(document). ready (function (){
	
	$('#cloneBtn ").click (function (){
		$('#box h2').clone ().prependTo('#box2');
		$('#box p').clone ().appendTo('#box2');
	});
});

//======================================================================================================================================
//=====================================================================================================================================	


//jQuery ReplaceWith() & ReplaceAll()

//ReplaceWith() method 1
$(document).ready(function(){
 $('#replaceBtn').click(function(){
    $('#box p:first-child').replaceWith("<h3>Yahoo Baba</h3>");
  });
});

//ReplaceWith() method 2
$(document).ready(function(){
 $('#replaceBtn').click(function(){
    $('#box p:first-child').replaceWith("Yahoo Baba");
  });
});

//ReplaceAll()
$('#replaceBtn').click(function(){
 $("<h3>Yahoo Baba</h3>").replaceAll("#box p:first");
});
});

//======================================================================================================================================
//======================================================================================================================================

//Wrap() & Unwrap()


//Wrap()
$(document).ready(function(){
 $('#wrapBtn').click(function(){
    $('#box p').wrap('<div class=".tests"></div>');//you can add classes in tags/div
  });
});	
//Unwrap()
$('#unwrapBtn').click(function(){
  $('#box p').unwrap();
});
});

//======================================================================================================================================
//=====================================================================================================================================

//wrapAll() & wraplnner()

//wrapAll()
$(document).ready(function(){
  $('#wrapAllBtn').click(function(){
    $('p').wrapAll('<div id="test"></div>');
  });
//wraplnner()
  
$('#wrapInnerBtn').click(function(){
 $('h1').wrapInner('<span class="red"></span');
});
});  

//======================================================================================================================================
//=====================================================================================================================================

//Height() & Width()

//Width()
$(document).ready(function(){
  $('#widthBtn').click(function(){
	$('#box').width("400px");
	
    console.log("Width : " + $('#box').width());
    console.log("innerWidth : " + $('#box').innerWidth());
    console.log("outerWidth : " + $('#box').outerWidth());
    console.log("outerWidth(true) : " + $('#box').outerWidth(true));
  });
});

//Height()
$(document).ready(function(){
  $('#widthBtn').click(function(){
	 $('#box').height("500px");

    console.log("Height : " + $('#box').height());
    console.log("innerHeight : " + $('#box').innerHeight());
    console.log("outerHeight : " + $('#box').outerHeight());
    console.log("outerHeight(true) : " + $('#box').outerHeight(true));
  });
});
//======================================================================================================================================
//=====================================================================================================================================

//Position() & Offset()

//======================================================================================================================================
//======================================================================================================================================

// Position - Relative to its Parent element

//top
//left

$(document).ready(function(){
 $('#positionBtn').click(function(){
// set position
	$('#box h2').offset({top:100, left:100});
//----------------------------------------------
    console.log($('#box').position());
//----------------------------------------------	
	var x = $('#box h2').position();
	console.log("Top:"+ x.top + " Left :" + x.left);
	
  });
// Offset - Relative to the Document  

 $('#offsetBtn').click(function(){
// set offset
	$('#box h2').offset({top:100, left:100});
//----------------------------------------------		 
    console.log($( '#box').offset());
//----------------------------------------------	
	var x = $('#box h2').offset();
	console.log("Top:"+ x.top + " Left :" + x.left);

  });
});
//======================================================================================================================================
//======================================================================================================================================

//scrollTop() & scrollLeft()

//scrollTop()
$(document).ready(function(){
 $ (window).scrollTop();
});

//scrollLeft()
$(document).ready(function(){
 $ (window).scrollLeft();
});

$(document).ready(function(){
 $ (window).scroll(function(){
    $('#box').html("");
    $('#box').append ("Top : " + $(window).scrollTop());
    $('#box').append ("<br>Left: " + $(window).scrollLeft()
  });
  $('#scrolltopBtn').click(function(){
    $(window).scrollTop(200);
  });
  $('#scrollleftBtn').click(function(){
    $(window).scrollLeft(100);
  });
});

//======================================================================================================================================
//======================================================================================================================================

//hasClass()

$(document).ready(function(){
 $('#hasclassBtn').click(function(){
    console.log($('#box h2').hasclass('test'));
  });
});

$(document).ready(function(){
  $('#hasclassBtn').click(function(){
    //console.log ($('#box h2').hasclass('test')
    var x = $('#box h2').hasClass('test');
    if(x == true){
      console.log('Yes');
    }else{
      console.log('NO');
    }
  });
});

//======================================================================================================================================
//======================================================================================================================================

//Effect : Hide() , Show() & Toggle()
$(document).ready(function(){
 $('#hideBtn').click(function(){
    $('#box').hide("fast");
  });
 $('#showBtn').click(function(){
    $('#box').show("slow");
  });
//--------------------------------------
 $('#hideBtn').click(function(){
    $('#box').hide("1000");
  });
 $('#showBtn').click(function(){
    $('#box').show("1000");
  });
//--------------------------------------
$('#hideBtn').click(function(){
  $('#box').hide(3000, function(){
    console.log("Now it is hidden");
  });
});
$('#showBtn').click(function(){
  $('#box').show(1000, function(){
     console.log ("Now it is show");
  });
});  
  
//toggle
$('#toggleBtn').click(function(){
  $('#box').toggle(1006);
});
  
});

//======================================================================================================================================
//======================================================================================================================================

// fadeIn(), fadeOut(), fadeToggle(), fadeTo()

$(document).ready(function(){
// fadeOut()1
$('#fadeOutBtn').click(function(){
	$('#box').fadeOut("slow/fast");
});
// fadeOut()2
$('#fadeOutBtn').click(function(){
	$('#box').fadeOut(3000, function(){
	console.log ("Now it is Hidden");
});
});

// fadeIn()1
$('#fadeOutBtn').click(function(){
	$('#box').fadeIn("slow/fast");
});
// fadeIn()2
$('#fadeOutBtn').click(function(){
	$('#box').fadeIn(3000, function(){
	console.log ("Now it is Hidden");
});
});

//fadeToggle()1
$('#fadeOutBtn').click(function(){
	$('#box').fadeToggle("slow/fast");
});
//fadeToggle()2
$('#fadeOutBtn').click(function(){
	$('#box').fadeToggle(3000, function(){
	console.log ("Now it is Hidden");
});
});

//fadeTo()1
$('#fadeOutBtn').click(function(){
	$('#box').fadeTo(3000,0.5,function(){
	console.log ("Now it is Hidden");
});
});
//fadeTo()2
$('#fadeOutBtn').click(function(){
	$('#box').fadeTo(3000,0.5);
});

}

//======================================================================================================================================
//======================================================================================================================================

//slideUp() , slideDown() & SlideToggle()

//slideUp()
 $(document).ready(function(){
$('#slideUpBtn').click(function(){
$('#box').slideUp();
});
//slideDown()
$('#slideDownBtn').click(function(){
$('#box').slideDown ();
});
//SlideToggle()
 $('#slideToggleBtn').click(function(){
$('#box').slideToggle();
});

});

//======================================================================================================================================
//======================================================================================================================================

//Animate Method()
 //$(selector).animate({params},speed,callback);
//					||
 //Almost any CSS Property (color, background-color)
//					||
 //CSS Property should be in Camel Case

 //padding-left ===>  paddingLeft