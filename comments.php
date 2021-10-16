<?php

if( post_password_required() ):
    return;
endif;
?>

<section class="comment container-lg ps-lg-5">
    <div class="comment__block">
        <div class="comment__list mb-5">
         <ul>

            <?php
            if (have_comments()) :
                ?>

                <?php
                foreach( $comments as $comment ):
                    ?>

                    <li class="d-flex">
                        <div class="comment__avatar">
                            <?php echo get_avatar( $comment, 60, '', '', [ 'class' => 'avatar avatar-60 photo avatar-default' ] ); ?>
                        </div>
                        <div class="w-100">
                            <div class="comment__header d-flex gap-3 my-3">
                                <p><span class="material-icons-outlined">person_outline</span> Author: <?php comment_author(); ?></p>
                                <p><span class="material-icons-outlined">
                                  calendar_today
                              </span> Date: <?php comment_date(); ?></p>
                          </div>
                          <div class="comment__content">

                            <?php comment_text(); ?>

                        </div>
                    </div>

                </li>

                <?php
            endforeach;
            the_comments_pagination(); 
        endif;
        ?>

    </ul>
</div>
<div class="comment__form">
    <?php

    comment_form([
        'comment_field'         =>  '<div class="clear"></div>

        <div class="d-flex mb-3">
        <textarea name="comment" cols="58" rows="7" class="form-control"></textarea>
        </div>',
        'fields'                =>  [
            'author'            =>  
            '<div class="input d-flex align-items-center">
            <label>' . __( 'Name', 'Restaurant' ) . '</label>
            <input type="text" name="author" class="form-control custom-form" />
            </div>',
            'email'             =>  
            '<div class="input d-flex align-items-center">
            <label>' . __( 'Email', 'Restaurant' ) . '</label>
            <input type="text" name="email" class="form-control custom-form" />
            </div>',
            'url'               =>  
            '<div class="input d-flex align-items-center mb-3">
            <label>' . __( 'Website', 'Restaurant' ) . '</label>
            <input type="text" name="url" class="form-control custom-form" />
            </div>'
        ],
        'class_submit'          =>  'btn btn-outline-secondary btn--secondary btn--green shadow-none',
        'label_submit'          =>  __( 'Submit Comment', 'Restaurant' ),
        'title_reply'           =>  __( 'Leave a <span>Comment</span>', 'Restaurant' )
    ]);

    ?>
</div>
</div>
</section>

