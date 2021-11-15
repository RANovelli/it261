<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <fieldset>
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" value="<?php if (isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>">
        <span class="error">
            <?php echo $first_name_Err; ?>
        </span>

        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" value="<?php if (isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>">
        <span class="error">
            <?php echo $last_name_Err; ?>
        </span>

        <label for="email">Email</label>
        <input type="email" name="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
        <span class="error">
            <?php echo $email_Err; ?>
        </span>

        <label for="phone">Phone Number</label>
        <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if (isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>">
        <span class="error">
            <?php echo $phone_Err; ?>
        </span>

        <label for="gender">Gender</label>
        <ul>
            <li>
                <input type="radio" name="gender" value="female" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="checked"'; ?>>Female
            </li>
            <li>
                <input type="radio" name="gender" value="male" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked"'; ?>>Male
            </li>
            <li>
                <input type="radio" name="gender" value="other" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'other') echo 'checked="checked"'; ?>>Other
            </li>
            <li>
                <input type="radio" name="gender" value="none" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'none') echo 'checked="checked"'; ?>>Prefer not to say
            </li>
        </ul>
        <span class="error">
            <?php echo $gender_Err; ?>
        </span>

        <label for="genre">What kinds of music do you like?</label>
        <ul>
            <li>
                <input type="checkbox" name="genre[]" value="psych" <?php if (isset($_POST['genre']) && in_array('psych', $genre)) echo 'checked="checked"'; ?>>Garage/Psych
            </li>
            <li>
                <input type="checkbox" name="genre[]" value="rap" <?php if (isset($_POST['genre']) && in_array('rap', $genre)) echo 'checked="checked"'; ?>>Hip-Hop
            </li>
            <li>
                <input type="checkbox" name="genre[]" value="soul" <?php if (isset($_POST['genre']) && in_array('soul', $genre)) echo 'checked="checked"'; ?>>Soul/R&B
            </li>
            <li>
                <input type="checkbox" name="genre[]" value="rock" <?php if (isset($_POST['genre']) && in_array('rock', $genre)) echo 'checked="checked"'; ?>>Rock & Roll 
            </li>
            <li>
                <input type="checkbox" name="genre[]" value="other" <?php if (isset($_POST['genre']) && in_array('other', $genre)) echo 'checked="checked"'; ?>>Other (feel free to share in comments)
            </li>
        </ul>
        <span class="error">
            <?php echo $genre_Err; ?>
        </span>

        <label for="format">Preferred Format</label>
        <select name="format">
            <option value="" NULL <?php if (isset($_POST['format']) && $_POST['format'] == NULL) echo 'selected="unselected"'; ?>>Select One</option>
            <option value="vinyl" <?php if (isset($_POST['format']) && $_POST['format'] == 'vinyl') echo 'selected="selected"'; ?>>Vinyl</option>
            <option value="tape" <?php if (isset($_POST['format']) && $_POST['format'] == 'tape') echo 'selected="selected"'; ?>>Cassette</option>
            <option value="cd" <?php if (isset($_POST['format']) && $_POST['format'] == 'cd') echo 'selected="selected"'; ?>>CD</option>
            <option value="streaming" <?php if (isset($_POST['format']) && $_POST['format'] == 'streaming') echo 'selected="selected"'; ?>>Streaming</option>
        </select>
        <span class="error">
            <?php echo $format_Err; ?>
        </span>

        <label for="comments">Comments</label>
        <textarea name="comments"><?php if (isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']); ?></textarea>
        <span class="error">
            <?php echo $comments_Err; ?>
        </span>

        <label for="privacy">Privacy</label>
        <ul>
            <li><input type="radio" name="privacy" value="agree" <?php if (isset($_POST['privacy']) && $_POST['privacy'] == 'agree') echo 'checked="checked"'; ?>>I agree</li>
        </ul>
        <span class="error">
            <?php echo $privacy_Err; ?>
        </span>

        <input type="submit" value="Send it">
        <p><a href="">Reset</a></p>
    </fieldset>
</form>