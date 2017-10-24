//var endpoint = "http://172.16.200.10/survey";

var endpoint = "https://www.enginewiz.com/app_schema/";

if (typeof(shop) == 'undefined') {
    var shop = Shopify.shop;
}

function appschema_initialize()
{
  return;

  var funcGetProductHandle = function(){

    var handle = "";
    var arrUrl = location.pathname.split( "/" );

    if( arrUrl[1] == "products" ) handle = arrUrl[2];
    if( arrUrl[1] == "collections" && arrUrl[3] == "products" && arrUrl[4] != null ) handle = arrUrl[4];

    return handle;
  }

  var funcBuildSchema = function( product ){
    for( var i = 0; i < product.variants.length; i ++ )
    {
      var html = "";
      var variant = product.variants[i];

      html = html + '<script type="application/ld+json">';
      html = html + '{';
      html = html + '  "@context": "http://schema.org",';
      html = html + '  "@type": "Product",';
      html = html + '  "name": "' + variant.name + '",';
      html = html + '  "description": "' + product.description.replace( /(<([^>]+)>)/ig, "" ) + '",';
      html = html + '  "url": "' + product.url + '",';
      html = html + '  "sku": "' + variant.sku + '",';
      html = html + '  "image": {';
      html = html + '    "@type": "ImageObject",';
      html = html + '    "url": "' + variant.featured_image.src + '"';
      html = html + '  },';
      html = html + '  "offers" : {';
      html = html + '    "@type" : "Offer",';
      html = html + '    "price" : "' + ( variant.price / 100 ) + '",';
      html = html + '    "priceCurrency" : "USD"';
      html = html + '  }';
      html = html + '}';
      html = html + '<\/script>';

      $('body').append( html );
    }  
  }

  if( schemaAPPLoaded == null || !schemaAPPLoaded )
  {
    var productHandle = funcGetProductHandle();
    if( productHandle != "" ){

      $.getJSON( '/products/' + productHandle + '.js', function( data ){
        funcBuildSchema( data );
      });        
    }
  }
}

function yourFunctionToRun(){
  $(document).ready( function (){
    appschema_initialize();
  });
}

function runYourFunctionWhenJQueryIsLoaded() {
  if (window.$){
    //possibly some other JQuery checks to make sure that everything is loaded here
    yourFunctionToRun();
  } else {
    setTimeout(runYourFunctionWhenJQueryIsLoaded, 100);
  }
}

runYourFunctionWhenJQueryIsLoaded();
