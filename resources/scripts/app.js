/**
 * External Dependencies
 */
import 'jquery';

$(() => {
  // console.log('Hello world');
});

// import then needed Font Awesome functionality
import { library, dom } from '@fortawesome/fontawesome-svg-core';
// import the Facebook and Twitter icons
import { faFacebook, faTwitter } from '@fortawesome/free-brands-svg-icons';
import { faEnvelope, faMortarPestle, faBomb, faGlassCheers } from '@fortawesome/free-solid-svg-icons';

// add the imported icons to the library
library.add(faFacebook, faTwitter, faEnvelope, faMortarPestle, faBomb, faGlassCheers );

// tell FontAwesome to watch the DOM and add the SVGs when it detects icon markup
dom.watch();
