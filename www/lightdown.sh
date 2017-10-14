#!/bin/bash
#shutdown light
irsend SEND_ONCE c_light KEY_POWER
sleep 2
irsend SEND_ONCE c_light KEY_POWER
 
