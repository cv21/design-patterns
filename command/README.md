# Command

![Command](https://dzone.com/storage/rc-covers/10610-thumb.png)

## Purpose

Encapsulates a request allowing it to be treated as an object. This allows the request to be handled in traditionally object based relationships such as queuing and callbacks.

## When to use

* A history of requests is needed.
* The invoker should be decoupled from the object handling the invocation.

## Team

* Invoker
* AbstractCommand
* ConcreteCommands