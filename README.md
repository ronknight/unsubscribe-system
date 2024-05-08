<p><a target="_blank" href="https://app.eraser.io/workspace/NYem9OTjyH2v0gNcGHdF" id="edit-in-eraser-github-link"><img alt="Edit in Eraser" src="https://firebasestorage.googleapis.com/v0/b/second-petal-295822.appspot.com/o/images%2Fgithub%2FOpen%20in%20Eraser.svg?alt=media&amp;token=968381c8-a7e7-472a-8ed6-4a6626da5501"></a></p>

# Unsubscribe System
This is a PHP-based system for handling email unsubscribe requests and tracking unsubscribe events using Google Analytics.

## Files
### 1. `unsub.php` 
This file is the main PHP script that handles the unsubscribe process. It checks for the presence of the `email` and `batch` parameters in the URL. If these parameters are present, it extracts the email, batch, timestamp, and IP address of the user. It then logs this information in a file called `unsubscribe.log` and tracks the unsubscribe event using Google Analytics.

The script includes two functions:

- `trackUnsubscribe($email, $batch, $timestamp, $ip_address)` : This function tracks the unsubscribe event using Google Analytics and redirects the user to `https://4sgm.com/`  after tracking.
- `redirectTo4sgm()` : This function redirects the user to `https://4sgm.com/` .
### 2. `unsubscribe.log` 
This file contains the logs of unsubscribe events. Each line in the file represents an unsubscribe event and includes the timestamp, email, batch, and IP address of the user.

### 3. `index.html` 
This file is an HTML page that serves as the landing page for the website. It includes a form where users can enter their information to subscribe to the mailing list. The page also includes a JavaScript function `unsubscribe()` that sends a POST request to the `unsub.php` script with the user's email, batch, timestamp, and IP address.

Additionally, the page includes Google Analytics tracking code and functions to handle URL parameters and form validation.

## Usage
1. When a user wants to unsubscribe from the mailing list, they are directed to the `unsub.php`  script with the `email`  and `batch`  parameters in the URL.
2. The `unsub.php`  script logs the unsubscribe event in the `unsubscribe.log`  file and tracks the event using Google Analytics.
3. The user is then redirected to `https://4sgm.com/` .
## Note
- The `unsub.php`  script assumes that the `email`  and `batch`  parameters are present in the URL. If these parameters are missing, it displays an error message.
- The `index.html`  file includes JavaScript functions to handle form validation and URL parameter parsing. It also includes Google Analytics tracking code and functions to track unsubscribe events.
- The provided code does not include the actual implementation of the tracking code or the handling of the POST request in `unsub.php` . These parts would need to be implemented based on the specific requirements.



<!-- eraser-additional-content -->
## Diagrams
<!-- eraser-additional-files -->
<a href="/README-Unsubscribe System Flowchart-1.eraserdiagram" data-element-id="wy_otlPJrIMvsSFSVeDT0"><img src="/.eraser/NYem9OTjyH2v0gNcGHdF___3Jivg2tjMecMlrHwbIVIBR8f7U03___---diagram----197aec526ede0519885d64262fe1de2f-Unsubscribe-System-Flowchart.png" alt="" data-element-id="wy_otlPJrIMvsSFSVeDT0" /></a>
<!-- end-eraser-additional-files -->
<!-- end-eraser-additional-content -->
<!--- Eraser file: https://app.eraser.io/workspace/NYem9OTjyH2v0gNcGHdF --->