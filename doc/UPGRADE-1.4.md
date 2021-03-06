# Upgrading Instructions

## Fix Recordings/Locutions storage paths

Until release 1.4.0, recordings and locutions were stored all in the same directory.
This can be a problem when a lot of these files exists, so we have updated the way these files are stored based on their ids.

This change will only apply to the new created objects and old paths require manual update.
In order to simplify this process we have created a simple bash script called FSObase2index.sh

**After upgrading** your installation run in **any of your data** instances:

```
cd /opt/irontec/ivozprovider/
scripts/FSObase2index.sh storage/ivozprovider_model_recordings.recordedfile
scripts/FSObase2index.sh storage/ivozprovider_model_locutions.encodedfile
```
## Invoice template breaking change

**psliwa/php-pdf** is not used to generate invoices anymore. It has been replaced by handlebars and wkhtmltopdf,
also templates have been splitted into header, body and footer. Because of that, old templates must
be adapted to the new format (HTML). Please, check out new reference templates.
