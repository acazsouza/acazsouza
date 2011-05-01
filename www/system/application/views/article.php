<small class="publication-date"><?php echo date("jS F Y", strtotime($article[0]->date)) ?></small>
<h1><?php echo $article[0]->title ?></h1>

<?php echo $article[0]->description ?>

<div id="comments">
    <h1>Comments about "<?php echo $article[0]->title ?>":</h1>

    <small class="publication-date">10th December 2010</small>
    <strong class="name">João da Silva</strong>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

    <small class="publication-date">10th December 2010</small>
    <strong class="name">João da Silva</strong>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

    <small class="publication-date">10th December 2010</small>
    <strong class="name">João da Silva</strong>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

    <form>
        <fieldset>
            <legend>Leave your comment:</legend>

            <div class="item-form">
                <label>Name</label>
                <input type="text" name="name">
            </div>

            <div class="item-form">
                <label>Web Site</label>
                <input type="text" name="web_site">
            </div>

            <label>Comments</label>
            <textarea name="comment"></textarea>

            <input type="submit" value="submit">
        </fieldset>
    </form>
</div>