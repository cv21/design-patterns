# Chain Of Responsibility

![Chain of responsibility](https://dzone.com/storage/rc-covers/10609-thumb.png)

## Purpose

Gives more than one object an opportunity to handle a request by linking receiving objects together.

## When to use

* Multiple objects may handle a request and the handler doesn't have to be a specific object.
* A set of objects should be able to handle a request with the handler determined at runtime.
* A request not being handled is an acceptable potential outcome.

## Team

* One interface/abstract class (Handler)
* Many concrete classes which extends its (ConcreteHandlers)
* Client that execute handle process