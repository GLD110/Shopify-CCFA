<?php
$arrVersion = array();
$latestVersion = "";
$flagStart = true;
foreach( array_keys( $arrContent ) as $key ) {
  $arrVersion[ $key ] = $key;
  if ($flagStart) {
    $latestVersion = $key;
    $flagStart = false;
  }
}
?>
<style>
    .content_item{ display: none; }
    .dropdown{ display: inline; }
    textarea { width: 90%; height: 400px; }
</style>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Schema Editor
    <!--    <small>List</small>-->
    </h1>
    <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Product Markup</li>
    </ol>
</section>

<!-- Main content -->

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class="col-md-12 column"  style = "border-bottom:solid 1px #ddd; margin-bottom:4px; padding-bottom: 5px;" >
                        <form style="display: inline" class = 'form-inline' id = 'frmSearch' action="<?php echo base_url($this->config->item('index_page') . '/liquid' ) ?>" method = "post" >
                          <input type = 'hidden' id = "sel_type" name = "sel_type" value = "<?=$sel_type?>" >
                          <div class="btn-group" role="group" aria-label="...">
                            <?php
                            foreach( $this->config->item('LIQUID_TYPE') as $key => $val ){
                              echo '<button type="button" class="btn btn_schema_type btn-' . ( $key == $sel_type ? "success" : "default" ) . '" schema_type = "' . $key . '" >' . $val['title'] . '</button>';
                            }
                            ?>
                          </div>
                          <?php if( $isAdmin ): ?>
                          &nbsp;&nbsp;|&nbsp;&nbsp;
                          <label>Version</label>&nbsp;&nbsp;
                          <?PHP echo form_dropdown('sel_version', $arrVersion, $latestVersion, 'id="sel_version" class="form-control input-group-sm" aria-labelledby="dropdownMenu1"'); ?>
                          &nbsp;&nbsp;|&nbsp;&nbsp;
                          <button type = "button" class = "btn btn-warning btn_publish">Publish</button> (Selected schema/version only)
                          &nbsp;&nbsp;&nbsp;&nbsp;
                          <button type = "button" class = "btn btn-danger btn_publish_all">Publish All</button> (All schema, latest version)
                          <?php else: ?>
                            <a href = "<?php echo base_url($this->config->item('index_page') . '/home/sign_in' ) ?>" class = "btn btn-warning" >Admin Login</a>
                          <?php endif; ?>
                        </form>
                    </div>
                    <div id = 'ret' class="col-md-12 column" ></div>
                </div><!-- /.box-header -->

                <div class="box-body">
                  <?php if( $isAdmin ): ?>
                  <form style="display: inline" class = 'form-inline' id = 'frmSubmit' action="<?php echo base_url($this->config->item('index_page') . '/liquid/update/' . $sel_type ) ?>" method = "post" >
                    &lt;!-- SchemaAPP Liquid Start --&gt;  <br>
                    &lt;meta name="schemaappversion" content="<span id = "sel_versoin_display"><?=$latestVersion?></span>"&gt;  <br>
                    &lt;script type="application/ld+json"&gt;  <br><br>
                    <textarea id = "txtContent" ></textarea>
                    <?php
                      foreach( $arrContent as $version => $content ){
                        echo '<div class = "content_item" version = "' . $version .'" >' . base64_encode( $content ) . '</div>';
                      }
                    ?>
                    <br><br>
                    &lt;/script&gt; <br>
                    &lt;!-- SchemaAPP Liquid End --&gt;
                    <br><br>
                    <input type = 'hidden' id = 'submit_content' name = "content" >
                    <button type = "button" class = "btn btn-danger btn_update">Update</button>
                  </form>
                  <?php else: ?>
                    <textarea readonly >
                    <?php echo  htmlspecialchars($arrContent[0]); ?>
                    </textarea>
                  <?php endif; ?>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->

    <script>

//       var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var t="";var n,r,i,s,o,u,a;var f=0;e=Base64._utf8_encode(e);while(f<e.length){n=e.charCodeAt(f++);r=e.charCodeAt(f++);i=e.charCodeAt(f++);s=n>>2;o=(n&3)<<4|r>>4;u=(r&15)<<2|i>>6;a=i&63;if(isNaN(r)){u=a=64}else if(isNaN(i)){a=64}t=t+this._keyStr.charAt(s)+this._keyStr.charAt(o)+this._keyStr.charAt(u)+this._keyStr.charAt(a)}return t},decode:function(e){var t="";var n,r,i;var s,o,u,a;var f=0;e=e.replace(/[^A-Za-z0-9+/=]/g,"");while(f<e.length){s=this._keyStr.indexOf(e.charAt(f++));o=this._keyStr.indexOf(e.charAt(f++));u=this._keyStr.indexOf(e.charAt(f++));a=this._keyStr.indexOf(e.charAt(f++));n=s<<2|o>>4;r=(o&15)<<4|u>>2;i=(u&3)<<6|a;t=t+String.fromCharCode(n);if(u!=64){t=t+String.fromCharCode(r)}if(a!=64){t=t+String.fromCharCode(i)}}t=Base64._utf8_decode(t);return t},_utf8_encode:function(e){e=e.replace(/rn/g,"n");var t="";for(var n=0;n<e.length;n++){var r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r)}else if(r>127&&r<2048){t+=String.fromCharCode(r>>6|192);t+=String.fromCharCode(r&63|128)}else{t+=String.fromCharCode(r>>12|224);t+=String.fromCharCode(r>>6&63|128);t+=String.fromCharCode(r&63|128)}}return t},_utf8_decode:function(e){var t="";var n=0;var r=c1=c2=0;while(n<e.length){r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r);n++}else if(r>191&&r<224){c2=e.charCodeAt(n+1);t+=String.fromCharCode((r&31)<<6|c2&63);n+=2}else{c2=e.charCodeAt(n+1);c3=e.charCodeAt(n+2);t+=String.fromCharCode((r&15)<<12|(c2&63)<<6|c3&63);n+=3}}return t}}
//
//       $(document).ready(function () {
//
//         // Show the first version
//         if( $('.content_item').length > 0 ){
//           $('#txtContent').val( Base64.decode($('.content_item').first().html()));
//         }
//
//         // Version selection
//         $('#sel_version').change( function(){
//           $('#txtContent').val( Base64.decode($('.content_item[version="' + $(this).val() + '"]').html() ));
//           $('#sel_versoin_display').html($(this).val());
//         });
//
//         // type click
//         $('.btn_schema_type').click( function(){
//           $('#sel_type').val( $(this).attr('schema_type'));
//           $('#frmSearch').submit();
//         });
//
//         // Submit
//         $('.btn_update').click( function(){
//           if( confirm( 'Would you like to save this update to the new version ?') )
//           {
// //            $('#submit_content').val( Base64.encode($('#txtContent').val()));
//             $('#submit_content').val( $('#txtContent').val());
//             $('#frmSubmit').submit();
//           }
//         });
//
//         // Publish
//         // Sync Button Config
//         $('.btn_publish').btn_init(
//           'publish',
//           {class: 'btn-warning', caption: 'Sync'},
//           {class: 'btn-default fa fa-spinner', caption: ''},
//           {class: 'btn-success', caption: 'Done'},
//           {class: 'btn-danger', caption: 'Error'}
//         );
//
//         $('.btn_publish').click( function(){
//
//           $(this).btn_action('publish', 'pending');
//
//           $.ajax({
//             url: '<?php echo base_url($this->config->item('index_page') . '/liquid/publish/' . $sel_type); ?>/' + $('#sel_version').val(),
//             type: 'GET'
//           }).done(function (data) {
//             $('.btn_publish').btn_action('publish', 'success');
//           }).error( function( data ){
//             $('.btn_publish').btn_action('publish', 'error');
//           })
//         });
//         $('.btn_publish_all').click( function(){
//
//           $(this).btn_action('publish', 'pending');
//
//           $.ajax({
//             url: '<?php echo base_url($this->config->item('index_page') . '/liquid/publish'); ?>',
//             type: 'GET'
//           }).done(function (data) {
//             $('.btn_publish_all').btn_action('publish', 'success');
//           }).error( function( data ){
//             $('.btn_publish_all').btn_action('publish', 'error');
//           })
//         });
//       });
    </script>
