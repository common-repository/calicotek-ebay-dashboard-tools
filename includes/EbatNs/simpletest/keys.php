<?php
    //show all errors - useful whilst developing
    error_reporting(E_ALL);

    // these keys can be obtained by registering at http://developer.ebay.com
    
    $production         = false;   // toggle to true if going against production
    $compatabilityLevel = 527;    // eBay API version
    
    if ($production) {
        $devID = 'DDD';   // these prod keys are different from sandbox keys
        $appID = 'AAA';
        $certID = 'CCC';
        //set the Server to use (Sandbox or Production)
        $serverUrl = 'https://api.ebay.com/ws/api.dll';      // server URL different for prod and sandbox
        //the token representing the eBay user to assign the call with
        $userToken = 'YOUR_PROD_TOKEN';          
    } else {  
        // sandbox (test) environment
        $devID = 'c61c2e2a-f8a2-4d86-902b-2d995b37bfba';         // insert your devID for sandbox
        $appID = 'CaliCoTe-bee8-408a-bf77-9ec7905dec8c';   // different from prod keys
        $certID = '369174c2-3b5b-481f-bea7-0526e426ae40';  // need three 'keys' and one token
        //set the Server to use (Sandbox or Production)
        $serverUrl = 'https://api.sandbox.ebay.com/ws/api.dll';
        // the token representing the eBay user to assign the call with
        // this token is a long string - don't insert new lines - different from prod token
        $userToken = 'AgAAAA**AQAAAA**aAAAAA**4AyoUQ**nY+sHZ2PrBmdj6wVnY+sEZ2PrA2dj6wFk4GhCpSEpwudj6x9nY+seQ**7DYCAA**AAMAAA**Ld7QYyvPJZH+hAt5E7+VQiV670thWOBqqI8PUuDTIjQXyMAdY0QcsW/CiAKJIl8phCD103SHCe6puYmn06N/F4kDyXNeVt3m0wSmqDr8Z70M68EICfiFq6M0pTNdmCo+mgjXzEvMTBkgmGd0HrohrCuTYZ8Mu6io/FVvPHADZPfNwcFZOpiVIY+61NUq/my+KjBMsxPNfPw+Sd06YsIrenoOa5O18BD5cpk80/2SD/F44ZVGDIVUnVSI/vEtfVaVtxCY3kCN0Lw5PQk8MVCdmrNNmUFM+nI3q6VWIg4UPaLNtwE292Z+2DGbQRrmR/Nbsbma11/DGusjI8lztTF/LyoCLpmto+Xg2pVWguhH2+5Nuk7g4JJdRFipsZTsgmKnIc91BrJhgU4dlDPe2AP1KApOcd83t2+dIQxAilEm9YD1BnjsxhBinawx+fgj2uAvT0LtpO7TeY+9IMYjY6cx21jnSdtIh1oZgIigrcJq2TFcpxB8ASI+A2BXkXWUFmYlju/Nqnblxm1L03TfratNlRzX54hTFzPTPlNUGQxNe6r5osOj4nsik39SiU/aZkPpyf8DIgllai7K65nMDVUU3aoDADfdiu1oU62H/fVq2h+zdxLwfUagAUhiunEMTqbRE7+Jn9uxoIbAIP9rdOCJ4EkLwSHYTH8rSVh+FMZ0Yw4Pr941qRRSXkaWnUBJLfhvhGtlLi9/kfNgdYpWK/noVlBOeWWKRbMtV5FYdRDorQ1a/LqWyXJNdEDoF5VaI+To';                 
    }
    
    
?>