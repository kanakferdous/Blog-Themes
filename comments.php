<div id="comments" class="row">
    <div class="col-full">
        <h3 class="h2">
            <?php 
                $comment_cn = get_comments_number();
                if($comment_cn <= 1){
                    echo $comment_cn.__(' Comment','wordkanak');
                }else{
                        echo $comment_cn.__(' Comments','wordkanak');
                }
            ?>
        </h3>       
        <!-- START commentlist -->
        <ol class="commentlist">
            <?php
                wp_list_comments();
            ?>
        </ol>
        <?php paginate_comments_links(); ?>
        <!-- END commentlist -->           
    </div> <!-- end col-full -->
</div> <!-- end comments -->
<div class="row comment-respond">
    <!-- START respond -->
    <div id="respond" class="col-full">
        <?php comment_form(); ?>
    </div>
    <!-- END respond-->
</div> <!-- end comment-respond -->