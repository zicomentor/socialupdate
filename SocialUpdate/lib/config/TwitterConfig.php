<?php
namespace config;
/**
 * TwitterConfig class provide twitter user configuration data.
 */
class TwitterConfig
{
        /**
         * Privide User Twitter Credentials
         * @return type array
         */
        public static function configData()
        {
            return [
                        '921048311410319361-IbxIcglnlFLbexURU73QJpjz4q6ir2T'=>'your auth access token',
                        '	X7ZUcE6a1wz5Om57nDKQdx1OogyO0ETaS29BfPbVQ1OCA
'=>'your auth access token secret',
                        'Z1X2v65y3j5KwN9QxUK3Kv8Yb'=>'your consumer key',
                        'WRFmudcpdbsMTXo2ASLo9iOJIsDly9dov0pHV5LfAewVSsInJF
'=>'your consumer secret',
                        'url_postStatusUpdate'=>'https://api.twitter.com/1.1/statuses/update.json'

		   ];
        }
}


