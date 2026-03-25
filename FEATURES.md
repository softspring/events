# Events Features

Functional definition for `softspring/events`.

This file defines the expected behavior and functional scope of the component. It describes what the package should provide to Symfony applications and reusable Softspring packages.

## Purpose

- Provide shared event classes for common Symfony application flows.
- Avoid redefining the same request, form, view, and get-response event objects across bundles and components.
- Make event-driven extension points easier to keep consistent between packages.

## Main Features

- Provide a base `RequestEvent` that carries an optional `Request`.
- Provide a base `FormEvent` that carries a `FormInterface` and an optional `Request`.
- Provide a base `ViewEvent` that carries mutable view data and an optional `Request`.
- Provide `GetResponseEvent`, `GetResponseRequestEvent`, and `GetResponseFormEvent` to support listeners that may short-circuit a flow with a `Response`.
- Provide `GetResponseEventInterface` so response-aware events can share the same contract.
- Provide `GetResponseTrait` to reuse response storage logic.
- Provide `DispatchTrait` to dispatch event objects through a Symfony event dispatcher from reusable classes.
- Provide `DispatchGetResponseTrait` to dispatch a response-aware event and return the response when a listener sets one.

## Expected Usage

- Use `RequestEvent` when a package wants to expose request-aware hooks around a flow.
- Use `FormEvent` when a package wants to expose hooks around form handling.
- Use `ViewEvent` when a package wants listeners to inspect or modify a view payload before rendering or returning it.
- Use a `GetResponse*` event when listeners should be able to stop the normal flow and provide a `Response`.
- Use the dispatch traits in controllers, managers, or services that already hold an event dispatcher and want a small helper API.

## Integration Expectations

- The component should work with standard Symfony event dispatching.
- Event objects should remain small and predictable.
- Packages should be able to adopt these classes without extra bundle configuration.
- Listeners should be able to read the event data they need without depending on package-specific event implementations.

## Extension Expectations

- Applications and bundles should be able to extend the provided event classes when they need extra context.
- Applications should be able to implement `GetResponseEventInterface` in custom events if they want the same response-short-circuit pattern.
- Packages should be able to reuse the provided traits instead of rewriting dispatch or response helper code.

## Current Limits

- The component does not provide a custom dispatcher or listener registration system.
- It focuses on a small set of recurring event shapes, not on every possible domain event style.
- It does not impose event names or naming conventions by itself; those stay in the consuming package.
