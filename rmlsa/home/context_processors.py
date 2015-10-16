__author__ = 'micah'

from gallery.models import *
from .models import *


def web_links_processor(request):
    try:
        random_image = GalleryImage.objects.order_by('?')[0]
    except IndexError:
        return None
    return {'random_image': random_image}


def partner_links_processor(request):
    partners = []
    try:
        partner_m_objs = PartnerSite.objects.all()
        for p in partner_m_objs:
            fn = p.image.name.split('/')
            partners.append(
                dict(
                    partner=p,
                    filename=fn[-1],
                )
            )
    except IndexError:
        return None
    return {'partners': partners}