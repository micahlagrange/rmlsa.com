from django.shortcuts import redirect
from django.conf import settings


class LoginRequiredMiddleware:
    def __init__(self, get_response):
        self.get_response = get_response

    def __call__(self, request):
        if not settings.DEBUG:  # Check if it's a production environment
            if not request.user.is_authenticated:
                if not request.path.startswith('/admin'):
                    return redirect('/admin/login/?next=/admin/')
        return self.get_response(request)
