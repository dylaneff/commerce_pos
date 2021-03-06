<?php

/**
 * @file
 * Default template for the commerce_pos_keypad keypad.
 *
 * Variables:
 * - $event: The event to trigger.
 * - $input_type: The type of element to show the currently entered value.
 *   Defaults to "text".
 */
?>

<div id="commerce-pos-keypad-keypad" style="display: none" class="commerce-pos-keypad-keypad-wrap">
  <div class="commerce-pos-keypad-keypad-container">
    <div class="commerce-pos-keypad-keypad-content">
      <div class="commerce-pos-keypad-keypad-popup-block">
        <div class="commerce-pos-keypad-keypad-value">
          <input class="commerce-pos-keypad-keypad-value" name="commerce-pos-keypad-keypad-value" title="value" type=<?php print $input_type; ?> disabled />
        </div>
        <div class="commerce-pos-keypad-keys">
          <div class="commerce-pos-keypad-numbers">
            <div class="commerce-pos-keypad-key" data-keybind="7">7</div>
            <div class="commerce-pos-keypad-key" data-keybind="8">8</div>
            <div class="commerce-pos-keypad-key" data-keybind="9">9</div>
            <div class="commerce-pos-keypad-key" data-keybind="4">4</div>
            <div class="commerce-pos-keypad-key" data-keybind="5">5</div>
            <div class="commerce-pos-keypad-key" data-keybind="6">6</div>
            <div class="commerce-pos-keypad-key" data-keybind="1">1</div>
            <div class="commerce-pos-keypad-key" data-keybind="2">2</div>
            <div class="commerce-pos-keypad-key" data-keybind="3">3</div>
            <div class="commerce-pos-keypad-key" data-keybind="0">0</div>
            <div class="commerce-pos-keypad-key" data-keybind=".">.</div>
          </div>

          <div class="commerce-pos-keypad-actions">
            <div class="commerce-pos-keypad-key" data-keybind="" data-key-action="backspace">&lt;</div>
            <div class="commerce-pos-keypad-key commerce-pos-keypad-action" data-key-action="submit">Enter</div>
            <div class="commerce-pos-keypad-link"><a class="commerce-pos-keypad-close" href="#">Close</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
