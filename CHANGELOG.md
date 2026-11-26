# ChangeLog

## 0.3.0 (11/26/2026)

### Security

- `KiotaAuthProvider` created with an empty `$allowedHosts` list no longer returns the access token for every host. It now requires the URL's host to be in the list.

### Added

- Local mock servers: a base URL may use plain `http` when its host is a loopback host (`127.0.0.1`, `::1` or `localhost`) that you also pass in `$allowedHosts`, for example `allowedHosts: ['127.0.0.1']`. Every other host still requires `https`. `AnalyticsAndReportingConfiguration::LOOPBACK_HOSTS` lists the loopback hosts.
- `AnalyticsAndReportingConfiguration::untrustedReason()` says why a URL may not receive the access token, and `AnalyticsAndReportingConfiguration::normalizeHost()` normalizes a host the same way the SDK compares hosts.

### Changed

- Hosts are compared lowercased and without IPv6 brackets, so `[::1]` and `::1` match.
- A rejected base URL now says whether the scheme or the host is not trusted.

## 0.2.0 (09/14/2026)

### Breaking changes

#### Changed signatures

`AnalyticsClient`:

| Operation | Previous parameters | Current parameters |
| --- | --- | --- |
| `getSellerStandardsProfile` | `(string $program, string $cycle, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $cycle, string $program, ?string $accessToken, ?RequestOptions $requestOptions)` |
