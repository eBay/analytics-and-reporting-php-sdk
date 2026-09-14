# ChangeLog

## 0.2.0 (09/14/2026)

### Breaking changes

#### Changed signatures

`AnalyticsClient`:

| Operation | Previous parameters | Current parameters |
| --- | --- | --- |
| `getSellerStandardsProfile` | `(string $program, string $cycle, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $cycle, string $program, ?string $accessToken, ?RequestOptions $requestOptions)` |
