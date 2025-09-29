<div class="group-xs group-middle">
    <span class="list-social-title">Share</span>
    <div>
        <ul class="list-inline list-social list-inline-sm">
            <li>
                <a class="icon fab fa-facebook-f"
                   href="javascript:void(0);"
                   onclick="shareTo('facebook')"></a>
            </li>
            <li>
                <a class="icon fab fa-twitter"
                   href="javascript:void(0);"
                   onclick="shareTo('twitter')"></a>
            </li>
            <li>
                <a class="icon fab fa-instagram"
                   href="javascript:void(0);"
                   onclick="shareTo('instagram')"></a>
            </li>
            <li>
                <a class="icon fab fa-google-plus-g"
                   href="javascript:void(0);"
                   onclick="shareTo('google')"></a>
            </li>
        </ul>
    </div>
</div>

<script>
    function shareTo(network) {
        const pageUrl = encodeURIComponent(window.location.href);
        let shareUrl = "";

        switch (network) {
            case "facebook":
                shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${pageUrl}`;
                break;
            case "twitter":
                shareUrl = `https://twitter.com/intent/tweet?url=${pageUrl}`;
                break;
            case "instagram":
                // Instagram не поддерживает прямой share URL
                shareUrl = `https://www.instagram.com/`;
                break;
            case "google":
                shareUrl = `https://plus.google.com/share?url=${pageUrl}`;
                break;
        }

        // Копируем ссылку в буфер обмена
        navigator.clipboard.writeText(window.location.href)
            .then(() => console.log("URL copied"))
            .catch(err => console.error("Copy failed", err));

        // Открываем новую вкладку
        window.open(shareUrl, "_blank");
    }
</script>
