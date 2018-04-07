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
        margin:2%;
        width: 450px;
        height: 450px;
        border: 1px solid black;
        /*background-image: url(images/InfographicExample.jpg) no-repeat;*/
    }
    #centerRight{
        float: right;
        height: 450px;
        width: 60%;
        margin-top: -30.5%;
        margin-right: 5%;
        padding: 3%;
    }
    .homeHeading{
        margin:2%;
    }
    #bottom button{
        margin-right: 10%;
        margin-bottom: 5%;
    }
    .button1{
        margin-left: 20%;
    }    
</style>
    <div id="centerBloc">
        <p>Apollonius of Perga venture Flatland permanence of the stars hydrogen atoms another world hydrogen atoms, Rig Veda tingling of the spine Drake Equation culture how far away cosmos rings of Uranus a mote of dust suspended in a sunbeam. Hypatia astonishment Apollonius of Perga. Laws of physics, as a patch of light. At the edge of forever. Great turbulent clouds laws of physics cosmos venture and billions upon billions upon billions upon billions upon billions upon billions upon billions.</p>
    </div>
    <div class="homeHeading">
        <h1>Heading 1</h1>    
    </div>
    <div class="infoGraphic"> 
        <img src="images/InfographicExample-450.png" alt="Info Graphic" />
    </div>

    <div id="centerRight">
        <p>Another world inconspicuous motes of rock and gas the ash of stellar alchemy venture, at the edge of forever realm of the galaxies? Another world muse about, tingling of the spine, radio telescope hydrogen atoms not a sunrise but a galaxyrise worldlets. Dream of the mind's eye, star stuff harvesting star light vastness is bearable only through love network of wormholes. Gathered by gravity. Brain is the seed of intelligence. As a patch of light, a very small stage in a vast cosmic arena of brilliant syntheses, star stuff harvesting star light. Great turbulent clouds something incredible is waiting to be known not a sunrise but a galaxyrise vastness is bearable only through love consciousness made in the interiors of collapsing stars shores of the cosmic ocean from which we spring. Prime number cosmos and billions upon billions upon billions upon billions upon billions upon billions upon billions.
        </p>
    </div>
    <div id="bottom">
        <span class="button1"><button>Button 1</button></span>
        <button>Button 2</button>
        <button>Button 3</button>
        <button>Button 4</button>
        
    </div>

<?php get_footer(); ?>