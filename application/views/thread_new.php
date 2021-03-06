<?php include( 'header.php' ); ?>

<div class="row">
    <div class="large-12 columns">
        <div class="row">
            <div class="large-8 small-12 columns">
                <h4>New Thread</h4><hr>
                <?php if( $this->session->userdata('username') ): ?>
                  <?php echo form_open(""); ?>
                        <input type="text" placeholder="Thread Title" name="title" id="title" value="<?php echo ( isset( $title ) ? $title : '' ) ?>"/>
                        <div class="form-error"><?php echo form_error('title') ?></div>
                        
                        <textarea name="content" id="content" rows="12"><?php echo ( isset( $content ) ? $content : '' ) ?></textarea>
                        <div class="form-error"><?php echo form_error('content') ?></div>
                        <input class="button secondary" type="submit" value="Post">                                
                  <?php echo form_close(); ?>
                <?php else: ?>
                    <p>You must be a member in order to create a thread.</p>
                <?php endif; ?>                
            </div>

            <div class="large-4 small-12 columns"> 
                <h4>Forum Rules</h4><hr>
                <ol>
                  <li>Don't post red pandas</li>
                  <li>This is rule number two</li>
                  <li>The third rule is a good one to follow</li>
                  <li>Perhaps this rule is too strict</li>
                  <li>This is nice</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<?php include( 'footer.php' ); ?>