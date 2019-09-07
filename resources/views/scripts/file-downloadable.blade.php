<script>
/**
 * Forces all TXT links to download automatically, if the browser supports it.  
 * Otherwise, open the link in a new browser window or tab.
 */
jQuery(document).ready(function($) {
   $('a[href$=".txt"]')
        .attr('download', '')
        .attr('target', '_blank'); 
});	
</script>