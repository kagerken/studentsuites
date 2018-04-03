<?php

/**

 * Template Name: SS Containers Home Page

 *

 * @package total-child

 */



get_header();



		get_template_part('template-parts/section', 'slider');

?>

<style>

    #centerBloc{

        margin: 1% 15%;

        padding: 3%;

        border-bottom: 3px solid black;

    }

    .infoGraphic{

        

        width: 450px;

        height: 450px;

        border: 1px solid black;

        /*background-image: url(images/InfographicExample.jpg) no-repeat;*/

    }

    #centerRight{

        height: 450px;

        width: 60%;

    }
    .ss-center-right{
		position: relative;	
		display:flex;
		align-items: center;
    }
    #bottom{
		width: 60%;
		margin: 1.5em auto;
		display:flex;
		flex-direction:row;
		flex-wrap:wrap;
		justify-content: space-around;
    }

	.ss-section-container{
		width: 95%;
		margin: 0 auto;
	}


	.ss-container{
		display:flex;
		flex-direction: row;
		flex-wrap:wrap;
	}
	.ss-container > div{
		width: 100%;
	}
	@media screen and (min-width:1200px){
		.ss-container{
			flex-wrap:nowrap;
		}
		.ss-section-container{
			width: 80%;
		}
		.ss-container .infographic{
			width: 40%;
		}
		.ss-container .ss-center-right{
			width: 60%;

		}
	}
</style>

    <div id="centerBloc">

        <p>Apollonius of Perga venture Flatland permanence of the stars hydrogen atoms another world hydrogen atoms, Rig Veda tingling of the spine Drake Equation culture how far away cosmos rings of Uranus a mote of dust suspended in a sunbeam. Hypatia astonishment Apollonius of Perga. Laws of physics, as a patch of light. At the edge of forever. Great turbulent clouds laws of physics cosmos venture and billions upon billions upon billions upon billions upon billions upon billions upon billions.</p>

    </div>
	
	<div class="ss-section-container">
	    <div class="homeHeading l-h-padding">
	        <h1>Heading 1</h1>    
	    </div>
	    <div class="ss-container">
		    <div class="infographic m-b-margin l-h-padding"> 
		        <img src="http://via.placeholder.com/450x450" alt="Info Graphic" width="450" height="450" />
		    </div>
		    <div class="ss-center-right m-b-margin l-h-padding">
		        <p>Another world inconspicuous motes of rock and gas the ash of stellar alchemy venture, at the edge of forever realm of the galaxies? Another world muse about, tingling of the spine, radio telescope hydrogen atoms not a sunrise but a galaxyrise worldlets. Dream of the mind's eye, star stuff harvesting star light vastness is bearable only through love network of wormholes. Gathered by gravity. Brain is the seed of intelligence. As a patch of light, a very small stage in a vast cosmic arena of brilliant syntheses, star stuff harvesting star light. Great turbulent clouds something incredible is waiting to be known not a sunrise but a galaxyrise vastness is bearable only through love consciousness made in the interiors of collapsing stars shores of the cosmic ocean from which we spring. Prime number cosmos and billions upon billions upon billions upon billions upon billions upon billions upon billions.
		        </p>
		    </div>
	    </div>
	</div>

    <div id="bottom">

        <button class="ss-call-to-action"><a href="#" title="">Call To Action</a></button>

        <button class="ss-call-to-action"><a href="#" title="">Call To Action</a></button>

        <button class="ss-call-to-action"><a href="#" title="">Call To Action</a></button>

        <button class="ss-call-to-action"><a href="#" title="">Call To Action</a></button>

        

    </div>



<?php get_footer(); ?>