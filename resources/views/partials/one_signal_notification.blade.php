<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async='async'></script>
      <script>
      var OneSignal = window.OneSignal || [];
      OneSignal.push(["init", {
      appId: "fde5427c-6447-4dc6-ae18-528489e21018",
      autoRegister: false,
      notifyButton: {
      enable: true /* Set to false to hide */
      },
      welcomeNotification: {
      "title": "Label initiative",
      "message": "Thanks for subscribing!",
      // "url": "" /* Leave commented for the notification to not open a window on Chrome and Firefox (on Safari, it opens to your webpage) */
      },
      promptOptions: {
      /* actionMessage limited to 90 characters */
      actionMessage: "We'd like to show you notifications for the latest news and updates.",
      /* acceptButtonText limited to 15 characters */
      acceptButtonText: "ALLOW",
      /* cancelButtonText limited to 15 characters */
      cancelButtonText: "NO THANKS"
      }
      }]);
      </script>

      <script data-cfasync="false">
      window.OneSignal = window.OneSignal || [];
      /* In milliseconds, time to wait before prompting user. This time is relative to right after the user presses <ENTER> on the address bar and navigates to your page */
      var notificationPromptDelay = 30000;
      /* Why use .push? See: http://stackoverflow.com/a/38466780/555547 */
      window.OneSignal.push(function() {
      /* Use navigation timing to find out when the page actually loaded instead of using setTimeout() only which can be delayed by script execution */
      var navigationStart = window.performance.timing.navigationStart;
      /* Get current time */
      var timeNow = Date.now();
      /* Prompt the user if enough time has elapsed */
      setTimeout(promptAndSubscribeUser, Math.max(notificationPromptDelay - (timeNow - navigationStart), 0));
      });
      function promptAndSubscribeUser() {
      window.OneSignal.isPushNotificationsEnabled(function(isEnabled) {
      if (!isEnabled) {
      /* Want to trigger different permission messages? See: https://documentation.onesignal.com/docs/permission-requests#section-onesignal-permission-messages */
      window.OneSignal.showHttpPrompt();
      }
      });
      }
      </script>