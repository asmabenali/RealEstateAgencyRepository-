jQuery(document).ready(function(){

  /* -----------------------------------------------------------------------
      FIXES AND HACKS TO DEAL WITH BROWSER ISSUES AND INCONSISTENCIES
  ----------------------------------------------------------------------- */

  // Replace the <hr/> elements with <b class="hr"></b>
  // We want the hr's to appear the same across all major browsers and we want to maintain the vertical rhythm.
  // This proves practically impossible to achieve by just styling the hr tag, this is why we are replacing 
  // it with another element.
  $('hr').replaceWith('<b class="hr"></b>');

  // Normally all block element have a bottom margin of 20px. However, inside various modules, 
  // for the last element in the module don't want the bottom margin. Because the support for the CSS 
  // pseudo selector :last-child differs between browsers, we are using jQuery to do this.
  $('div.alignright, div.alignleft, div.aligncenter, div.mod-bevel .bd, .message').children(':last-child').css({ 'margin-bottom': '0' });
  
  // Normally browsers collapse margins on adjacent elements. In many situations this is desirable, 
  // but it breaks vertical spacing between modules. Margin collapsing can't be prevented by using 
  // normal CSS mechanisms, so we are inserting additional element after each module. With this 
  // element between them, the modules are no longer adjacent and their margins will not be collapsed.
  $('.mod').after('<b class="uncollapse-margins"></b>');
  
  // Set cell spacing on all tables to 1px
  $('table').attr({ cellSpacing : 1 })


  /* -----------------------------------------------------------------------
      CALL AND INITIALISE GLOBALLY USED PLUGINS
  ----------------------------------------------------------------------- */
  
  // Pretty buttons
  $('a.jbtn').pragmaButtons();
  $('input.jbtn').pragmaButtons();
  
  // Main navigation
  $('#main-nav').pragmaNavigation();
    
  // Cufon font replacements
  Cufon.replace('h1', {
    wordSpacing: '-4px',
    fontFamily: 'M Plus 2c medium',
    color: '-linear-gradient(#80889b, .40=#bbb, .85=#788092)',
    textShadow: '#444 0px -.8px, #fff 0px .8px'
  });
  Cufon.replace('h2, h3, h4', {
    fontFamily: 'M Plus 2c medium',
    wordSpacing: '-4px'
  });
  Cufon.replace('.slider h2, .slider h3, .slider h4', {
    wordSpacing: '-4px',
    fontFamily: 'M Plus 2c bold',
    color: '-linear-gradient(#ddd, .45=#fff, .85=#ddd)',
    textShadow: '#fff 0px -.5px, #444 0px .5px'
  });
 
});
