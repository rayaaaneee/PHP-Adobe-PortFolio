""" Ce programme automatise la mise à jour du fichier data.txt à chaque fois que le fichier CV_Rayane_Merlin.pdf 
est modifié, il faut lancer le programme et le laisser tourner le temps qu'il faut """
#A savoir : les deux programmes marchent independament, on peut update une fois avec update.py ou en 
#cours de route avec auto_update.py


#importer le contenu de update.py
import update as updateFile

import sys
import time
import logging
from watchdog.observers import Observer
from watchdog.events import FileSystemEventHandler
from watchdog.events import LoggingEventHandler

def modify(event):
    print("File modified")
    updateFile.write()
    
def any (event):
    print("Any event")
    updateFile.write()

#Fonction main du programme
if __name__ == "__main__":
    logging.basicConfig(level=logging.INFO,
                        format='%(asctime)s - %(message)s',
                        datefmt='%Y-%m-%d %H:%M:%S')
    
    filename = "index/files/CV_Rayane_Merlin.pdf"
    
    event_handler = FileSystemEventHandler()

    event_handler.on_any_event = any
    event_handler.on_modified = modify
    
    
    observer = Observer()
    observer.schedule(event_handler, filename, recursive=False)
    try:
        observer.start()
        print("\nWatching file...\n")
        time.sleep(3)
        while True:
            time.sleep(10)
    except KeyboardInterrupt:
        print("Program Stopped")
        observer.stop()
    observer.join()