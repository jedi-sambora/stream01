 <?php
  header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
 ?>    
    
    
    <video id="videoPlayer" controls style="width: 100%; max-width: 800px; height: auto;">
        Your browser does not support the video tag.
    </video>

    <script type="text/javascript">
        // Initialize the Shaka Player
        var video = document.getElementById('videoPlayer');
        var player = new shaka.Player(video);

        // Listen for error events
        player.addEventListener('error', onErrorEvent);

        function onErrorEvent(event) {
            console.error('Error code', event.detail.code, 'object', event.detail);
        }

        // Set the ClearKey DRM license information
        var clearKeyConfig = {
            'drm': {
                'clearKeys': {
                    '57d2ac9210cfbca3596cc679a01c8b29': 'd5e35c0f39c76adf24853d7ea18c71e7'
                    													
                }
            }
        };
 player.getNetworkingEngine().registerRequestFilter(function(type, request) {
                if (type == shaka.net.NetworkingEngine.RequestType.MANIFEST ||
                    type == shaka.net.NetworkingEngine.RequestType.SEGMENT) {
                    request.headers['referer'] = 'https://visionplus.id';
                }
            });

        // Apply the configuration to the player
        player.configure(clearKeyConfig);

        // Try to load the DASH stream
        var manifestUri = 'https://cempedak-live-cdn.mncnow.id/live/eds/SPOTV-HD/sa_dash_vmx/SPOTV-HD.mpd';

        player.load(manifestUri).then(function() {
            console.log('The video has now been loaded!');
        }).catch(onError);  // onError is executed if the asynchronous load fails

        function onError(error) {
            console.error('Error code', error.code, 'object', error);
        }
    </script>

