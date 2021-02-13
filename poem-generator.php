    <?php include('header.php'); ?>  <!-- Call another file "header.php" -->
    <div class="container">
        <div class="wrapper">
        <h1> Here's Your Valentine's Poem </h1> 
        <?php

        //Declare variables
        $submit = filter_input(INPUT_POST, 'submit', );
        $colour = filter_input(INPUT_POST, 'colour');
        $noun = filter_input(INPUT_POST, 'noun');
        $person = filter_input(INPUT_POST, 'person');

        //Create a new function with three parameters to generate a message based on the user input
        function poemDisplay($colour, $noun, $person) {
            if ((ctype_alpha($colour) === false) || (ctype_alpha($noun) === false) || (ctype_alpha($person) === false)) 
            {
                echo "<p><b> Please enter letters </b></p>";                    
            } else if ($colour === "blue")
            {
                echo "<div class='poemDiv'>";
                echo "<blockquote> I wandered lonely as a cloud </blockquote>";
                echo "<blockquote> That floats on high o’er vales and hills, </blockquote>";
                echo "<blockquote> When all at once I saw a crowd, </blockquote>";
                echo "<blockquote> A host, of golden daffodils </blockquote>";
                echo "<figcaption> &mdash; William Wordsworth, <cite> I Wandered Lonely as a Cloud </cite> </figcaption>";
                echo "</div>"; 
            } else if ($colour === "white")
            {
                echo "<div class='poemDiv'>";
                echo "<blockquote> Some days </blockquote>";
                echo "<blockquote> I am more wolf </blockquote>";
                echo "<blockquote> than woman </blockquote>";
                echo "<blockquote> and I am still learning </blockquote>";
                echo "<blockquote> how to stop apologising </blockquote>";
                echo "<blockquote> for my wild. </blockquote>";
                echo "<figcaption> &mdash; Nikita Gill, <cite> Wolf and Woman </cite> </figcaption>";
                echo "</div>"; 
            } else if ($colour === "red") 
            {
                echo "<div class='poemDiv'>";
                echo "<blockquote> I am not cruel, just truthful — </blockquote>";
                echo "<blockquote> The eye of a little god, four cornered. </blockquote>";
                echo "<figcaption> &mdash; Sylvia Plath, <cite> Mirror </cite> </figcaption>";
                echo "</div>"; 
            } else {
                echo "<div class='poemDiv'>";
                echo "<p> Roses are $colour.</p>";
                echo "<p> $noun are blue. </p>";
                echo "<p> Dear $person, Happy Valentine's Day to you! </p>";
                echo "</div>"; 
            }
        }
        
        if(isset($submit) === true) { //If there is the variable "$submit," print the valentine's message.
            poemDisplay($colour, $noun, $person); 
        } else { //If there isn't, let a user know they need to enter their information
            "<p> Please submit your info! </p>";
        }

        ?>
         <a href="index.php" class="btn btn-secondary"> Create Another Poem </a><!-- Go back to index.php -->
         </div>
        </div>
    </body>
</html>