window.trackActivity = async function trackActivity(data = {}) {
    const sourceUrl = data.sourceUrl || data.source_url || window.location.pathname || window.location.href;
    const targetUrl = data.targetUrl || data.target_url || '';
    const metadata = data.metadata && typeof data.metadata === 'object' ? data.metadata : {};

    const payload = {
        activity_type: data.activityType || data.activity_type || 'tracked_action',
        action: data.action || 'click',
        entity_type: data.entityType || data.entity_type || 'link',
        entity_slug: data.entitySlug || data.entity_slug || '',
        entity_name: data.entityName || data.entity_name || '',
        source_url: sourceUrl,
        target_url: targetUrl,
        metadata: {
            ...metadata,
            element: metadata.element || 'link',
            class: 'track-activity',
            target_label: data.entityName || data.entity_name || metadata.target_label || '',
        },
    };

    const apiPath = (window.APP_BASE_PATH || '') + '/track-activity.php';

    const response = await fetch(apiPath, {
        method: 'POST',
        credentials: 'same-origin',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-Requested-With': 'XMLHttpRequest',
        },
        body: JSON.stringify(payload),
    });

    return response.json().catch(() => ({}));
};

document.addEventListener('DOMContentLoaded', () => {
    const trackedItems = document.querySelectorAll('.track-activity');

    if (!trackedItems.length) {
        return;
    }

    const buildTargetUrl = (element) => {
        if (element instanceof HTMLAnchorElement) {
            const href = element.getAttribute('href');
            if (!href || href === '#' || href.startsWith('javascript:')) {
                return '';
            }
            return new URL(href, window.location.href).href;
        }

        const url = element.dataset.url || element.getAttribute('data-url') || '';
        if (url) {
            return new URL(url, window.location.href).href;
        }

        if (element.form) {
            const action = element.form.getAttribute('action');
            const formUrl = action ? new URL(action, window.location.href).href : window.location.href;
            return formUrl;
        }

        return window.location.href;
    };

    const getActionLabel = (element) => {
        const dataAction = element.dataset.action || element.getAttribute('data-action');
        if (dataAction) {
            return dataAction;
        }

        return element.tagName === 'BUTTON' ? 'click' : 'navigate';
    };

    const getEntityName = (element) => {
        const datasetName = element.dataset.entityName || element.getAttribute('data-entity-name');
        if (datasetName) {
            return datasetName;
        }

        if (element instanceof HTMLElement) {
            return (element.textContent || '').replace(/\s+/g, ' ').trim();
        }

        return '';
    };

    const continueAction = (element, targetUrl) => {
        if (element instanceof HTMLAnchorElement) {
            window.location.href = targetUrl;
            return;
        }

        if (element.form) {
            element.form.submit();
            return;
        }

        if (targetUrl && targetUrl !== window.location.href) {
            window.location.href = targetUrl;
        }
    };

    trackedItems.forEach((element) => {
        if (element.dataset.activityBound === 'true') {
            return;
        }

        element.dataset.activityBound = 'true';

        element.addEventListener('click', async (event) => {
            if (element.dataset.processing === 'true') {
                return;
            }

            const targetUrl = buildTargetUrl(element);
            const payload = {
                activityType: element.dataset.activityType || 'tracked_action',
                action: getActionLabel(element),
                entityType: element.dataset.entityType || element.tagName.toLowerCase(),
                entitySlug: element.dataset.entitySlug || '',
                entityName: getEntityName(element),
                sourceUrl: window.location.pathname,
                targetUrl: targetUrl,
                metadata: {
                    element: element.tagName.toLowerCase(),
                    class: 'track-activity',
                    target_label: getEntityName(element),
                },
            };

            event.preventDefault();
            element.dataset.processing = 'true';

            try {
                const response = await window.trackActivity(payload);
                const result = response || {};

                if (result.requires_login) {
                    if (result.login_url) {
                        window.location.href = result.login_url;
                        return;
                    }
                    window.location.href = (window.APP_BASE_PATH || '') + '/member-login.php';
                    return;
                }

                continueAction(element, targetUrl);
            } catch (error) {
                console.error('Track activity failed:', error);
                continueAction(element, targetUrl);
            } finally {
                delete element.dataset.processing;
            }
        });
    });
});
