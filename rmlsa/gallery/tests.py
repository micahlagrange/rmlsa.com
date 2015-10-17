from django.test import TestCase
from gallery.models import GalleryImage

# Create your tests here.

class DateTimeTestCase(TestCase):
	def gallery_image_test(self):
		date = datetime.datetime.now()
		self.assertEqual(date.tzinfo, not None)
		self.assertEqual(date.tzinfo.utcoffset(date), not None)

