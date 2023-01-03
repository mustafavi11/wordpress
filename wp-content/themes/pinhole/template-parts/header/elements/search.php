<?php if( in_array('search', pinhole_get_option('header_elements', 'multi') ) ) : ?>
<ul class="pinhole-search">
    <li class="pinhole-action-search">
        <span><i class="fa fa-search"></i></span>
        <span class="pinhole-search-close">
            <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 45 45" style="enable-background:new 0 0 45 45;" xml:space="preserve" version="1.1" id="svg2"><metadata id="metadata8"><rdf:RDF><cc:Work rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/></cc:Work></rdf:RDF></metadata><defs id="defs6"><clipPath id="clipPath16" clipPathUnits="userSpaceOnUse"><path id="path18" d="M 0,36 36,36 36,0 0,0 0,36 Z"/></clipPath></defs><g transform="matrix(1.25,0,0,-1.25,0,45)" id="g10"><g id="g12"><g clip-path="url(#clipPath16)" id="g14"><g transform="translate(22.2383,17.9956)" id="g20"><path id="path22" style="fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 9.883,9.883 c 1.172,1.171 1.172,3.071 0,4.242 -1.172,1.171 -3.071,1.172 -4.242,0 l -9.883,-9.883 -9.883,9.883 c -1.171,1.172 -3.071,1.172 -4.243,0 -1.171,-1.171 -1.171,-3.071 10e-4,-4.243 L -8.484,0 -18.391,-9.907 c -1.172,-1.171 -1.172,-3.071 0,-4.242 0.586,-0.586 1.354,-0.879 2.121,-0.879 0.768,0 1.536,0.293 2.122,0.879 l 9.906,9.906 9.883,-9.882 c 0.586,-0.585 1.353,-0.878 2.121,-0.878 0.767,0 1.535,0.293 2.121,0.878 1.172,1.171 1.172,3.072 0,4.243 L 0,0 Z"/></g></g></g></g></svg>		
        </span>
        <ul class="sub-menu">
            <li>
                <?php get_search_form(); ?>
            </li>
        </ul>
    </li>
</ul>
<?php endif; ?>