<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Verify\V2\Service\Entity;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
abstract class ChallengeOptions {
    /**
     * @param \DateTime $expirationDate The future date in which this Challenge
     *                                  will expire
     * @param string $details Public details provided to contextualize the Challenge
     * @param string $hiddenDetails Hidden details provided to contextualize the
     *                              Challenge
     * @param string $twilioSandboxMode The Twilio-Sandbox-Mode HTTP request header
     * @return CreateChallengeOptions Options builder
     */
    public static function create(\DateTime $expirationDate = Values::NONE, string $details = Values::NONE, string $hiddenDetails = Values::NONE, string $twilioSandboxMode = Values::NONE): CreateChallengeOptions {
        return new CreateChallengeOptions($expirationDate, $details, $hiddenDetails, $twilioSandboxMode);
    }

    /**
     * @param string $twilioSandboxMode The Twilio-Sandbox-Mode HTTP request header
     * @return FetchChallengeOptions Options builder
     */
    public static function fetch(string $twilioSandboxMode = Values::NONE): FetchChallengeOptions {
        return new FetchChallengeOptions($twilioSandboxMode);
    }

    /**
     * @param string $factorSid Factor Sid.
     * @param string $status The Status of theChallenges to fetch
     * @param string $twilioSandboxMode The Twilio-Sandbox-Mode HTTP request header
     * @return ReadChallengeOptions Options builder
     */
    public static function read(string $factorSid = Values::NONE, string $status = Values::NONE, string $twilioSandboxMode = Values::NONE): ReadChallengeOptions {
        return new ReadChallengeOptions($factorSid, $status, $twilioSandboxMode);
    }

    /**
     * @param string $authPayload Optional payload to verify the Challenge
     * @param string $twilioSandboxMode The Twilio-Sandbox-Mode HTTP request header
     * @return UpdateChallengeOptions Options builder
     */
    public static function update(string $authPayload = Values::NONE, string $twilioSandboxMode = Values::NONE): UpdateChallengeOptions {
        return new UpdateChallengeOptions($authPayload, $twilioSandboxMode);
    }
}

class CreateChallengeOptions extends Options {
    /**
     * @param \DateTime $expirationDate The future date in which this Challenge
     *                                  will expire
     * @param string $details Public details provided to contextualize the Challenge
     * @param string $hiddenDetails Hidden details provided to contextualize the
     *                              Challenge
     * @param string $twilioSandboxMode The Twilio-Sandbox-Mode HTTP request header
     */
    public function __construct(\DateTime $expirationDate = Values::NONE, string $details = Values::NONE, string $hiddenDetails = Values::NONE, string $twilioSandboxMode = Values::NONE) {
        $this->options['expirationDate'] = $expirationDate;
        $this->options['details'] = $details;
        $this->options['hiddenDetails'] = $hiddenDetails;
        $this->options['twilioSandboxMode'] = $twilioSandboxMode;
    }

    /**
     * The future date in which this Challenge will expire, given in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
     *
     * @param \DateTime $expirationDate The future date in which this Challenge
     *                                  will expire
     * @return $this Fluent Builder
     */
    public function setExpirationDate(\DateTime $expirationDate): self {
        $this->options['expirationDate'] = $expirationDate;
        return $this;
    }

    /**
     * Details provided to give context about the Challenge. Shown to the end user. It must be a stringified JSON with the following structure: {"message": "string", "fields": [ { "label": "string", "value": "string"}]}. `message` is required. If you send the `fields` property, each field has to include `label` and `value` properties. If you had set `include_date=true` in the `push` configuration of the [service](https://www.twilio.com/docs/verify/api/service), the response will also include the challenge's date created value as an additional field called `date`
     *
     * @param string $details Public details provided to contextualize the Challenge
     * @return $this Fluent Builder
     */
    public function setDetails(string $details): self {
        $this->options['details'] = $details;
        return $this;
    }

    /**
     * Details provided to give context about the Challenge. Not shown to the end user. It must be a stringified JSON with only strings values eg. `{"ip": "172.168.1.234"}`
     *
     * @param string $hiddenDetails Hidden details provided to contextualize the
     *                              Challenge
     * @return $this Fluent Builder
     */
    public function setHiddenDetails(string $hiddenDetails): self {
        $this->options['hiddenDetails'] = $hiddenDetails;
        return $this;
    }

    /**
     * The Twilio-Sandbox-Mode HTTP request header
     *
     * @param string $twilioSandboxMode The Twilio-Sandbox-Mode HTTP request header
     * @return $this Fluent Builder
     */
    public function setTwilioSandboxMode(string $twilioSandboxMode): self {
        $this->options['twilioSandboxMode'] = $twilioSandboxMode;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Verify.V2.CreateChallengeOptions ' . $options . ']';
    }
}

class FetchChallengeOptions extends Options {
    /**
     * @param string $twilioSandboxMode The Twilio-Sandbox-Mode HTTP request header
     */
    public function __construct(string $twilioSandboxMode = Values::NONE) {
        $this->options['twilioSandboxMode'] = $twilioSandboxMode;
    }

    /**
     * The Twilio-Sandbox-Mode HTTP request header
     *
     * @param string $twilioSandboxMode The Twilio-Sandbox-Mode HTTP request header
     * @return $this Fluent Builder
     */
    public function setTwilioSandboxMode(string $twilioSandboxMode): self {
        $this->options['twilioSandboxMode'] = $twilioSandboxMode;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Verify.V2.FetchChallengeOptions ' . $options . ']';
    }
}

class ReadChallengeOptions extends Options {
    /**
     * @param string $factorSid Factor Sid.
     * @param string $status The Status of theChallenges to fetch
     * @param string $twilioSandboxMode The Twilio-Sandbox-Mode HTTP request header
     */
    public function __construct(string $factorSid = Values::NONE, string $status = Values::NONE, string $twilioSandboxMode = Values::NONE) {
        $this->options['factorSid'] = $factorSid;
        $this->options['status'] = $status;
        $this->options['twilioSandboxMode'] = $twilioSandboxMode;
    }

    /**
     * The unique SID identifier of the Factor.
     *
     * @param string $factorSid Factor Sid.
     * @return $this Fluent Builder
     */
    public function setFactorSid(string $factorSid): self {
        $this->options['factorSid'] = $factorSid;
        return $this;
    }

    /**
     * The Status of the Challenges to fetch. One of `pending`, `expired`, `approved` or `denied`.
     *
     * @param string $status The Status of theChallenges to fetch
     * @return $this Fluent Builder
     */
    public function setStatus(string $status): self {
        $this->options['status'] = $status;
        return $this;
    }

    /**
     * The Twilio-Sandbox-Mode HTTP request header
     *
     * @param string $twilioSandboxMode The Twilio-Sandbox-Mode HTTP request header
     * @return $this Fluent Builder
     */
    public function setTwilioSandboxMode(string $twilioSandboxMode): self {
        $this->options['twilioSandboxMode'] = $twilioSandboxMode;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Verify.V2.ReadChallengeOptions ' . $options . ']';
    }
}

class UpdateChallengeOptions extends Options {
    /**
     * @param string $authPayload Optional payload to verify the Challenge
     * @param string $twilioSandboxMode The Twilio-Sandbox-Mode HTTP request header
     */
    public function __construct(string $authPayload = Values::NONE, string $twilioSandboxMode = Values::NONE) {
        $this->options['authPayload'] = $authPayload;
        $this->options['twilioSandboxMode'] = $twilioSandboxMode;
    }

    /**
     * The optional payload needed to verify the Challenge. E.g., a TOTP would use the numeric code.
     *
     * @param string $authPayload Optional payload to verify the Challenge
     * @return $this Fluent Builder
     */
    public function setAuthPayload(string $authPayload): self {
        $this->options['authPayload'] = $authPayload;
        return $this;
    }

    /**
     * The Twilio-Sandbox-Mode HTTP request header
     *
     * @param string $twilioSandboxMode The Twilio-Sandbox-Mode HTTP request header
     * @return $this Fluent Builder
     */
    public function setTwilioSandboxMode(string $twilioSandboxMode): self {
        $this->options['twilioSandboxMode'] = $twilioSandboxMode;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Verify.V2.UpdateChallengeOptions ' . $options . ']';
    }
}