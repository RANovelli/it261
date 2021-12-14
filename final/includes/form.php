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

        <label for="era">Which era of architecture do you prefer?</label>
        <ul>
            <li>
                <input type="checkbox" name="era[]" value="1940" <?php if (isset($_POST['era']) && in_array('1940', $era)) echo 'checked="checked"'; ?>>1940s
            </li>
            <li>
                <input type="checkbox" name="era[]" value="1950" <?php if (isset($_POST['era']) && in_array('1950', $era)) echo 'checked="checked"'; ?>>1950s
            </li>
            <li>
                <input type="checkbox" name="era[]" value="1960" <?php if (isset($_POST['era']) && in_array('1960', $era)) echo 'checked="checked"'; ?>>1960s
            </li>
            <li>
                <input type="checkbox" name="era[]" value="1970" <?php if (isset($_POST['era']) && in_array('1970', $era)) echo 'checked="checked"'; ?>>1970s 
            </li>
        </ul>
        <span class="error">
            <?php echo $era_Err; ?>
        </span>

        <label for="style">Preferred Style</label>
        <select name="style">
            <!-- <option value="" NULL <?php if (isset($_POST['style']) && $_POST['style'] == NULL) echo 'selected="unselected"'; ?>>Select One</option> -->
            <option value="mcm" <?php if (isset($_POST['style']) && $_POST['style'] == 'mcm') echo 'selected="selected"'; ?>>MCM</option>
            <option value="deco" <?php if (isset($_POST['style']) && $_POST['style'] == 'deco') echo 'selected="selected"'; ?>>Art Deco</option>
            <option value="gothic" <?php if (isset($_POST['style']) && $_POST['style'] == 'gothic') echo 'selected="selected"'; ?>>Gothic</option>
            <option value="other" <?php if (isset($_POST['style']) && $_POST['style'] == 'other') echo 'selected="selected"'; ?>>Other (share in comments)</option>
        </select>
        <span class="error">
            <?php echo $style_Err; ?>
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